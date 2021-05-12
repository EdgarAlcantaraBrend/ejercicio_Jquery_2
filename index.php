<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><strong>IMPRESIÓN DIGITAL</strong></h1>
            <div class="card">
                <div class="card-body">
                        <div id="resultado">
                            <label for="">Cantidad de fotos</label>
                            <input type="text" name="cantidad" id="cantidad" class="form-control">
                        </div>
                        <form action="">
                            <label for="">Tipo de fotos</label>
                            <select name="tipoFoto" id="tipoFoto" class="form-control">
                                <option value="color">Color</option>
                                <option value="blanco_negro">Blanco y Negro</option>
                            </select>
                            <br>
                        </form>
                        <hr>
                        <div id="medidas">
                            <form action="">
                                <label for="">Medidas</label>
                                <select name="medida" id="medida" class="form-control">
                                    <option value="3x4">3x4</option>
                                    <option value="5x7">5x7</option>
                                    <option value="4x6">4x6</option>
                                    <option value="6x8">6x8</option>
                                </select>
                                <br>
                            </form>
                            <div class="row">
                                <div class="col-sm-5 mt-2">
                                    <button class="btn btn-danger btn-block" id="btncalcular" ">Calcular</button>
                                </div>
                                <div class="col text-center">
                                    <label for="" id="resultado2"></label>
                                    <div class="alert alert-success text-center" role="alert">
                                        <div id="calcularResultado"></div>
                                    </div>
                                </div>
                            </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>

        let num_fotos;

        let val1=4.00;
        let val2=5.20;
        let val3=6.00;
        let val4=7.90;
        let val5=5.50;
        let val6=6.20;
        let val7=7.50;
        let val8=9.00;
        let resultado;
            
            $(document).ready(function(){

                $('#btncalcular').click(function(){
                    
                    num_fotos= parseFloat($('#cantidad').val());

                    let tipo_fotos=$('#tipoFoto').val();
                    let medida=$('#medida').val();

                    if (medida =="3x4") {
                        if (tipo_fotos=="color") {
                            resultado=num_fotos*val5;

                            resultado=resultado+"";

                            $('#calcularResultado').text(resultado);
                        }else{
                            resultado=num_fotos*val1;
                            resultado=resultado+"";

                            $('#calcularResultado').text(resultado);
                        }
                    }
                    if (medida=="5x7") {
                        if (tipo_fotos=="color") {
                            resultado=num_fotos*val7;

                            resultado=resultado+"";

                            $('#calcularResultado').text(resultado);
                        }else{
                            resultado=num_fotos*val3;
                            resultado=resultado+"";

                            $('#calcularResultado').text(resultado);
                        }
                    }
                    if (medida=="4x6") {
                        if (tipo_fotos=="color") {
                            resultado=num_fotos*val6;

                            resultado=resultado+"";

                            $('#calcularResultado').text(resultado);
                        }else{
                            resultado=num_fotos*val2;
                            resultado=resultado+"";

                            $('#calcularResultado').text(resultado);
                        }
                    }
                    if (medida=="6x8") {
                        if (tipo_fotos=="color") {
                            resultado=num_fotos*val8;

                            resultado=resultado+"";

                            $('#calcularResultado').text(resultado);
                        }else{
                            resultado=num_fotos*val4;
                            resultado=resultado+"";

                            $('#calcularResultado').text(resultado);
                        }
                    }


                });
            });
        </script>
    </body>
</html>