<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/chat.css" rel="stylesheet">
    </head>
    <body>
        
                  
    <div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="">
        <div class="portlet portlet-default">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h4><i class="fa fa-circle text-green"></i> <?php echo$nome_sistema ?></h4>
                    </div>
                    <div class="portlet-widgets">
                        <div class="btn-group">
                            <button type="button" class="btn btn-white dropdown-toggle btn-xs" data-toggle="dropdown">
                                <i class="fa fa-circle text-green"></i> Status
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                                </li>
                                <li><a href="#"><i class="fa fa-circle text-orange"></i> Ocupado</a>
                                </li>
                                <li><a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                                </li>
                            </ul>
                        </div>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion" href="#chat"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="chat" class="panel-collapse collapse in">
                    <div>
                    <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-center text-muted small">Dezembro, 2023 - 12:23 PM</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle img-chat" src="images/carol.png" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Carol Alves
                                            <span class="small pull-right">12:23 PM</span>
                                        </h4>
                                        <p>Como estamos no projeto?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle img-chat" src="images/thiago.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Thiago Alves
                                            <span class="small pull-right">12:28 PM</span>
                                        </h4>
                                        <p>Olá Carol. </p>
                                        <p>Estamos prontos para dar continuidade, vamos ver moodboard?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle img-chat" src="images/carol.png" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Carol Alves
                                            <span class="small pull-right">12:39 PM</span>
                                        </h4>
                                        <p>Vamos marcar para as 14h? Pode ser?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    </div>
                    <div class="portlet-footer">
                        <form role="form">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Enter message..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-default pull-right">Enviar</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
    </div>
</div>               

        
    </body>
</html>






<!------ Include the above in your HEAD tag ---------->
