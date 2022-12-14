<?php
// Import thư viện data vào
require_once 'database.php';
 
// Load thư viện phân trang
include_once 'pagination.php';
 
// Connect DB
connect();
 
// Phân trang
$config = array(
    'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1,
    'total_record'  => count_all_member(), // tổng số thành viên
    'limit'         => 3,
    'link_full'     => 'index.php?page={page}',
    'link_first'    => 'index.php',
    'range'         => 9
);
 
$paging = new Pagination();
$paging->init($config);
 
// Lấy limit, start
$limit = $paging->get_config('limit');
$start = $paging->get_config('start');
 
// Lấy danh sách thành viên
$member = get_all_member($limit, $start);
 
// Kiểm tra nếu là ajax request thì trả kết quả
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    die (json_encode(array(
        'member' => $member,
        'paging' => $paging->html()
    )));
}
 
// Disconnect DB
disconnect();
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            li{float:left; margin: 3px; border: solid 1px gray; list-style: none}
            a{padding: 5px;}
            span{display:inline-block; padding: 0px 3px; background: blue; color:white }
        </style>
         <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>
    <body>
    <br>
                
        <div id="content">
            <div id="list">
               
                
                <table border="1" cellspacing="0" cellpadding="5">
                    <?php foreach ($member as $item){ ?>
                    <tr>
                        <td>
                           <?php echo $item['manongsan']; ?>  
                        </td>
                        <td>
                           <?php echo $item['tennongsan']; ?> 
                        </td>
                        <td>
                           <?php echo $item['maloai']; ?>  
                        </td>
                        <td>
                           <?php echo $item['trongluong']; ?>  
                        </td>
                        <td>
                           <?php echo $item['kichthuoc']; ?>  
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div id="paging">
                <?php echo $paging->html(); ?>
            </div>
        </div>
         <script language="javascript">
             $('#content').on('click','#paging a', function ()
             {
                 var url = $(this).attr('href');
                  
                 $.ajax({
                     url : url,
                     type : 'get',
                     dataType : 'json',
                     success : function (result)
                     {
                         //  kiểm tra kết quả đúng định dạng không
                         if (result.hasOwnProperty('member') && result.hasOwnProperty('paging'))
                         {
                             var html = '<table border="1" cellspacing="0" cellpadding="5">';
                             // lặp qua danh sách thành viên và tạo html
                             $.each(result['member'], function (key, item){
                                html += '<tr>';
                                html += '<td>'+item['manongsan']+'</td>'; 
                                html += '<td>'+item['tennongsan']+'</td>'; 
                                html += '<td>'+item['maloai']+'</td>'; 
                                html += '<td>'+item['trongluong']+'</td>'; 
                                html += '<td>'+item['kichthuoc']+'</td>'; 
                                html += '</tr>';
                             });
                              
                             html += '</table>';
                              
                             // Thay đổi nội dung danh sách thành viên
                             $('#list').html(html);
                              
                             // Thay đổi nội dung phân trang
                             $('#paging').html(result['paging']);
                              
                             // Thay đổi URL trên website
                             window.history.pushState({path:url},'',url);
                         }
                     }
                 });
                 return false;
             });
         </script>
    </body>
</html>