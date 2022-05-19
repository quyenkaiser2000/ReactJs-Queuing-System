<!DOCTYPE html>
<html lang="en">
<head>
<base href="{{ asset('/') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://kit.fontawesome.com/dff14b3591.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"><!-- Main CSS -->
	 <link href="front/style.css" rel="stylesheet">

</head>
<body>
    
    <div class="left-sidebar">
        <div class="row" style="margin-right: 0px !important;margin-left: 0px !important;height:100%;">
            <div class="col-2" style="background: #fff;">
                    <div class="panel ">
                            <div class="logo">
                                <h1>
                                <img src="{{asset('/storage/pathimg/Logoalta.png')}}" alt="">
                                </h1>
                            </div>
                            <ul>
                                <li>
                                    <a class="" href="{{'/dashboard'}}" aria-expanded="false">
                                        <span class="hide-menu">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/thietbi'}}" aria-expanded="false">
                                        <span class="hide-menu">Thiết bị</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/dichvu'}}" aria-expanded="false">
                                        <span class="hide-menu">Dịch vụ</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="active" href="{{'/capso'}}" aria-expanded="false">
                                        <span class="hide-menu">Cấp số</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/baocao'}}" aria-expanded="false">
                                        <span class="hide-menu">Báo cáo</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{'/hethong'}}" aria-expanded="false">
                                        <span class="hide-menu">Cài đặt hệ thống</span>
                                    </a>
                                </li>
                            </ul>
                            
                            <form class="logout" action="/logout-user" method="POST" >
                                @csrf
                                <button type="submit" class="btn btn-danger btn-logout"><img class="img-logout" src="{{asset('/storage/pathimg/logout.png')}}" alt="">Đăng Xuất</button>
                            </form>
                    </div>
            </div>
            @yield('body')
            
        </div>
    </div>
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
          getPagination('#table-id');
					//getPagination('.table-class');
					//getPagination('table');

		  /*					PAGINATION 
		  - on change max rows select options fade out all rows gt option value mx = 5
		  - append pagination list as per numbers of rows / max rows option (20row/5= 4pages )
		  - each pagination li on click -> fade out all tr gt max rows * li num and (5*pagenum 2 = 10 rows)
		  - fade out all tr lt max rows * li num - max rows ((5*pagenum 2 = 10) - 5)
		  - fade in all tr between (maxRows*PageNum) and (maxRows*pageNum)- MaxRows 
		  */
		 

        function getPagination(table) {
        var lastPage = 1;

        $('#maxRows')
            .on('change', function(evt) {
            //$('.paginationprev').html('');						// reset pagination

            lastPage = 1;
            $('.pagination')
                .find('li')
                .slice(1, -1)
                .remove();
            var trnum = 0; // reset tr counter
            var maxRows = parseInt($(this).val()); // get Max Rows from select option

            if (maxRows == 5000) {
                $('.pagination').hide();
            } else {
                $('.pagination').show();
            }

            var totalRows = $(table + ' tbody tr').length; // numbers of rows
            $(table + ' tr:gt(0)').each(function() {
                // each TR in  table and not the header
                trnum++; // Start Counter
                if (trnum > maxRows) {
                // if tr number gt maxRows

                $(this).hide(); // fade it out
                }
                if (trnum <= maxRows) {
                $(this).show();
                } // else fade in Important in case if it ..
            }); //  was fade out to fade it in
            if (totalRows > maxRows) {
                // if tr total rows gt max rows option
                var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                //	numbers of pages
                for (var i = 1; i <= pagenum; ) {
                // for each page append pagination li
                $('.pagination #prev')
                    .before(
                    '<li data-page="' +
                        i +
                        '">\
                                        <span>' +
                        i++ +
                        '<span class="sr-only">(current)</span></span>\
                                        </li>'
                    )
                    .show();
                } // end for i
            } // end if row count > max rows
            $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
            $('.pagination li').on('click', function(evt) {
                // on click each page
                evt.stopImmediatePropagation();
                evt.preventDefault();
                var pageNum = $(this).attr('data-page'); // get it's number

                var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

                if (pageNum == 'prev') {
                if (lastPage == 1) {
                    return;
                }
                pageNum = --lastPage;
                }
                if (pageNum == 'next') {
                if (lastPage == $('.pagination li').length - 2) {
                    return;
                }
                pageNum = ++lastPage;
                }

                lastPage = pageNum;
                var trIndex = 0; // reset tr counter
                $('.pagination li').removeClass('active'); // remove active class from all li
                $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
                // $(this).addClass('active');					// add active class to the clicked
                limitPagging();
                $(table + ' tr:gt(0)').each(function() {
                // each tr in table not the header
                trIndex++; // tr index counter
                // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                if (
                    trIndex > maxRows * pageNum ||
                    trIndex <= maxRows * pageNum - maxRows
                ) {
                    $(this).hide();
                } else {
                    $(this).show();
                } //else fade in
                }); // end of for each tr in table
            }); // end of on click pagination list
            limitPagging();
            })
            .val(5)
            .change();

        // end of on select change

        // END OF PAGINATION
        }

        function limitPagging(){
            // alert($('.pagination li').length)

            if($('.pagination li').length > 7 ){
                    if( $('.pagination li.active').attr('data-page') <= 3 ){
                    $('.pagination li:gt(5)').hide();
                    $('.pagination li:lt(5)').show();
                    $('.pagination [data-page="next"]').show();
                }if ($('.pagination li.active').attr('data-page') > 3){
                    $('.pagination li:gt(0)').hide();
                    $('.pagination [data-page="next"]').show();
                    for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
                        $('.pagination [data-page="'+i+'"]').show();

                    }

                }
            }
        }

        $(function() {
        // Just to append id number for each row
        $('table tr:eq(0)').prepend('<th> ID </th>');

        var id = 0;

        $('table tr:gt(0)').each(function() {
            id++;
            $(this).prepend('<td>' + id + '</td>');
        });
        });

        





    

    $(document).on('click','.click-notification',function(){
        
        var element = document.getElementById("notification");
        element.classList.add("show");
        element.classList.remove("hide");

    });
    document.addEventListener('mouseup', function(e) {
    var element = document.getElementById('notification');
    if (!element.contains(e.target)) {
        element.classList.add("hide");
        element.classList.remove("show");
    }
    });





    $(document).on('click','.btn-update',function(){
        
        var element = document.getElementById("test");
        element.classList.add("test1");
        element.classList.remove("test2");

    });
    $(document).on('click','.exit-inso',function(){
        
        var element = document.getElementById("test");
        element.classList.add("test2");
        element.classList.remove("test1");

    });
    document.addEventListener('mouseup', function(e) {
    var element = document.getElementById('test');
    if (!element.contains(e.target)) {
        element.classList.add("test2");
        element.classList.remove("test1");
    }
    });
</script>

</html>