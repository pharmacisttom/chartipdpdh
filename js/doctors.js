function show() 
{
    $.ajax({
         type:'GET',
         url:'show.php',
         success: function(response){
            response = JSON.parse(response);
            var html ="";
            if(response.lenght){
                html += '< table class = "table">';
                html += '<tr>';
                html += '<th>รหัส13หลัก</th>';
                html += '<th>ชื่อ</th>';
                html += '<th>ตำแหน่ง</th>';
                html += '<th>staff</th>';
                html += '<tr>';
                //ส่วนของ loop ดึงข้อมูลมาแสดง
                $.each(response,function(key,value){
                    html += "<tr>";
                    html += "<td>"+ value.iddoctor +"</td>";
                    html += "<td>"+ value.ndoctor +"</td>";
                    html += "<td>"+ value.position +"</td>";
                    html += "<td>"+ value.staff +"</td>";
                    html += "</tr>";

                });
                html += '</table>';
            }else{
                html +='<div class="alert alert-warning">';
                html +='No recordes found';
                html += '</div>';
            }
            // 
            $("#doctorlist").html(html);

         }
        
    });

}

$(document).ready(function(){
    //get all doctor   
    
show()

});