$(document).ready(function () {

    $.ajax({
        url: "http://localhost/kevaat/admin/php_action/fetchPubs.php",
        method: "get",
        success: function (data) {
            $("#rowNews").empty();

            $.each(JSON.parse(data), function (key, info) {
//                 $("#rowNews").append(`
//                     <div class="col-lg-4 col-sm-12 border border-light my-2">
//                         <div class="text-primary font-weight-bold">
//                             <a href="http://localhost/kevaat/info.php?post=${info.id}"> <h3> ${info.titre} </h3></a>
//                         </div>
//                         <div> ${info.contenu.slice(0,100)} </div>
//                         <div class="text-right"> <i class="fa fa-calendar"></i> <small> ${info.date}</small> </div>
//                         <div class="text-center">
//                         <a href="http://localhost/kevaat/info.php?post=${info.id}"><button class="btn btn-outline-success">EN SAVOIR PLUS </button></a>
// </div>
//                     </div>
//                     `);
                $("#rowNews").append(`
                    <div class="col-lg-3 col-md-6 col-sm-12 my-2 ">                  
                    <div class="card border border-success" >
                      <img src="${info.img}" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary"><a href="http://localhost/kevaat/info.php?post=${info.id}">  ${info.titre} </h3></a>
                        <p class="card-text text-left">
                        ${info.contenu.slice(0,100)}
                        </p>
                          <p class="card-text text-right"><small class="text-muted"><i class="bx bx-time"></i> ${info.date.slice(0,10)}</small></p>
                        <a href="http://localhost/kevaat/info.php?post=${info.id}"><button class="btn btn-outline-success">EN SAVOIR PLUS </button></a>

                      </div>
                    </div>
                    </div>

                    `);
            });
        }
    });


});