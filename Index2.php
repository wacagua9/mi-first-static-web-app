<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="estilos.css" />
        <title> Tipificacion </title>
    </head>
    <script type="text/javascript">
        function showContentt() {
            element = document.getElementById("g");
            check = document.getElementById("e1");
            if (check.checked) {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        }

        function showValida() {

            element2 = document.getElementById("i");
            check = document.getElementById("d").value;
            if(element2.onclick){
                if (check == "") {
                    w = "Invalido";
                } else {
                    w = "Valido";
                }
            }
        }

        function limpiar1() {
            document.getElementById("a").value = "";
            document.getElementById("b").value = "";
            document.getElementById("c7").value = "";
        }

        function limpiar2() {

            document.getElementById("d").value = "";
            document.getElementById("c1").value = "";
            document.getElementById("c2").value = "";
            document.getElementById("c3").value = "";
            document.getElementById("c4").value = "";
            document.getElementById("c5").value = "";
            document.getElementById("c6").value = "";
        }

    </script>

    <body>

        <?php
        if(isset($_POST['Consultar'])){
            $za = $_POST['nom'];
            $ai = '';
            $aj = '';
            if (strpos($za, 'mundo') !== false) {
                $ab = 'Validado';
                $ai = 'Soport';
                $aj = 'Alta';

            }else{
                $ai = 'Soport';
                $aj = 'Alta';

            }
        }

        if(isset($_POST['i'])){
            $aa = $_POST['carac'];
            if (strpos($aa, 'mundo') !== false) {
                $ab = 'Validado';
                $ac = 'Soport';
                $ad = 'Alta';
                $ae = 'nivel 1';
                $af = 'Mesa Serv';
                $ag = 'nivel 1';
                $ah = 'Nombre TI';



            }else{
                $ab = 'Mensaje Invalido';
                $ac = '';
                $ad = '';
                $ae = '';
                $af = '';
                $ag = '';
                $ah = '';
            }
        }   
        ?>

        <h1 class="a">
            <center> Tipificacion</center>
            <h1 class="b"></h1>
        </h1>
        <br><br>
        <form action="" method="post">
            <center>
                <table class="d7">
                    <tr>
                        <td>
                            <a class="f">Segmento</a><input type="text" class="c11" id="c7" disabled value="<?php echo $ai;?>">
                        </td>
                        <td>
                            &nbsp;&nbsp;&nbsp;
                        </td>
                        <td>
                            <a class="f">Nombre</a> <input type="text" class="c11" id="a" name="nom">
                        </td>
                        <td>
                            &nbsp;&nbsp;&nbsp;
                        </td>
                        <td>
                            <a class="f">Sede</a> <input type="text" class="c11" id="b" disabled value="<?php echo $aj;?>">
                        </td>
                    </tr>
                </table>
                <input type="button" id="n" class="a2" value="Consultar">
                <input type="button" id="m" class="a2" value="Nueva Consulta" onclick="javascript:limpiar1()">
                <br><br>
                <h1 class="b"></h1>
            </center>
        </form>

        <form action="Index2.php" method="post">
            <center>
                <table>
                    <tr>
                        <td>
                            <br>
                            <a class="f">Caracteristicas</a> <input type="text" class="c11" id="d" name="carac" onclick="javascript:limpiar2()" value="<?php echo $ab;?>">
                            <input type="submit" id="i" class="a2" name="i" value="Comprobar" onclick="javascript:showValida()">
                        </td>
                    </tr>
                </table>
            </center>
        </form>

        <form>
            <center>
                <br>
                <table class="d7">
                    <tr>
                        <td>
                            <a class="f">categoria</a>
                        </td>
                        <td>
                            <input type="text" class="c11" id="c1" disabled value="<?php echo $ac;?>">
                        </td>
                        <td class="f7">
                        </td>
                        <td>
                            <a class="f">prioridad</a>
                        </td>
                        <td>
                            <input type="text" class="c11" id="c2" disabled value="<?php echo $ad;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="f">sub-categoria</a>
                        </td>
                        <td>
                            <input type="text" class="c11" id="c3" disabled value="<?php echo $ae;?>">
                        </td>
                        <td class="f7">
                        </td>
                        <td>
                            <a class="f">grupo</a>
                        </td>
                        <td>
                            <input type="text" class="c11" id="c4" disabled value="<?php echo $af;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="f">item</a>
                        </td>
                        <td>
                            <input type="text" class="c11" id="c5" disabled value="<?php echo $ag;?>">
                        </td>
                        <td class="f7">
                        </td>
                        <td>
                            <a class="f">Tecnico</a>
                        </td>
                        <td>
                            <input type="text" class="c11" id="c6" disabled value="<?php echo $ah;?>">
                        </td>
                    </tr>
                </table>
                <br><br>
                <table>
                    <tr>
                        <TD id="n" class="f7">
                            <h1 class="aa">
                                <center> Escalamiento</center>
                            </h1>

                            <br><br>
                            <a class="f">Si</a>
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="nota" class="c11" id="e1" value="1" onchange="javascript:showContentt()"><br><br>
                            <a class="f">No</a>
                            &nbsp;
                            <input type="radio" name="nota" class="c11" id="e2" value="2" onchange="javascript:showContentt()"><br><br>
                        </TD>
                        <TD id="f" class="f7">
                            <div style="display: none;" id="g">
                                <a class="f">Nota</a>
                                <br>
                                <input type="text" class="c11" id="h"><br>
                            </div>
                        </TD>
                    </tr>
                </table>
            </center>
        </form>
    </body>

</html>
