$(document).ready(function () {

    $.ajax({
        url: "http://localhost/kevaat/admin/php_action/pubs.php",
        method: "get",
        success: function (data) {
            // console.log(data);
            $("#rowNews").empty();
            $.each(JSON.parse(data), function (key, info) {
                $("#rowNews").append(`
                    <tr style="font-family: 'Open Sans', sans-serif">
                        <th scope="row" >
                           ${info.id}
                        </th>
                                                <td>
                           ${info.date}
                        </td>
                        <td>
                           ${info.titre}
                        </td>

                        <td>
                           ${info.contenu.slice(0, 100)}
                         </td>

                         <td>
                         <div>

                          <a  href="edit.php?post=${info.id}">
                             <button class="btn btn-primary">
                                <i class=" text-white fa fa-edit"></i>
                              </button>
                          </a>

</div>
                          </td>                        
                        </tr>
                    `);
            });
        }

    });
});


