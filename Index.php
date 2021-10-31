<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilos.css" />
    <title> Tipificacion </title>
</head>

<script type="text/javascript">
    function showContent1() {
        element9 = document.getElementById("z9");
        element8 = document.getElementById("z8");
        element7 = document.getElementById("z7");
        check = document.getElementById("x9");
        if (check.checked) {
            element9.style.display = 'block';
            element8.style.display = 'none';
            element7.style.display = 'none';
        } else {
            element9.style.display = 'none';
            element8.style.display = 'none';
            element7.style.display = 'none';
        }
    }

    function showContent2() {
        element9 = document.getElementById("z9");
        element8 = document.getElementById("z8");
        element7 = document.getElementById("z7");
        check = document.getElementById("x8");
        if (check.checked) {
            element9.style.display = 'none';
            element8.style.display = 'block';
            element7.style.display = 'none';
        } else {
            element9.style.display = 'none';
            element8.style.display = 'none';
            element7.style.display = 'none';
        }
    }

    function showContent3() {
        element9 = document.getElementById("z9");
        element8 = document.getElementById("z8");
        element7 = document.getElementById("z7");
        check = document.getElementById("x7");
        if (check.checked) {
            element9.style.display = 'none';
            element8.style.display = 'none';
            element7.style.display = 'block';
        } else {
            element9.style.display = 'none';
            element8.style.display = 'none';
            element7.style.display = 'none';
        }
    }

    function showContentt() {
        element = document.getElementById("xa");
        element2 = document.getElementById("bg");
        check = document.getElementById("w3");
        if (check.checked) {
            element.style.display = 'block';
            element2.style.display = 'block';
        } else {
            element.style.display = 'none';
            element2.style.display = 'block';
        }
    }

    function showContent() {
        element = document.getElementById("p");
        check = document.getElementById("x");
        if (check.checked) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function showContenttt() {
        element = document.getElementById("cg");
        check = document.getElementById("y");
        if (check.checked) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function copiarDots() {

        if (document.getElementById("w").checked == true) {
            var compra = "Comprado";
        } else {
            document.getElementById("w1").checked == true
            var compra = "Traido";
        }

        if (document.getElementById("y").checked == true) {
            var motivo1 = "cliente se comunica por que presenta Falla de ";

            if (document.getElementById("x9").checked == true) {
                var motivo11 = "No navega se indica realizar ";



            } else {
                if (document.getElementById("x8").checked == true) {
                    var motivo11 = "Intermitencia se indica realizar ";
                } else {
                    if (document.getElementById("x7").checked == true) {
                        var motivo11 = "Lentitud se indica realizar ";
                    }
                }
            }

        } else {
            if (document.getElementById("y1").checked == true) {
                var motivo1 = "Consultas";
                var a1 = "\n";
                var a2 = "";
                var a3 = "\n";
                var a4 = "";

            } else {
                if (document.getElementById("x").checked == true) {
                    var motivo1 = "Modificaciones";
                    var a1 = "\n" + "Direccion registrada : ";
                    var a2 = "\n" + "Valor ultima factura cancelada : ";
                    var a3 = "\n" + "Cedula del titular : ";
                    var a4 = "\n";
                }
            }
        }

        var numero = document.getElementById("b").value;
        var nombre = document.getElementById("d").value;
        var ciudad = document.getElementById("f").value;
        var dir = document.getElementById("h").value;
        var factura = document.getElementById("j").value;
        var cc = document.getElementById("c1").value;
        var solu = document.getElementById("q1").value;

        var texto = +numero + "/" + nombre + "/" + cc + "/" + ciudad + "/" + dir + "/" + factura + "/" + compra + "/" + motivo1 + "/" + solu;

        document.getElementById("u").innerHTML = texto;

    }

    function limpiar() {
        document.getElementById("b").value = "";
        document.getElementById("d").value = "";
        document.getElementById("f").value = "";
        document.getElementById("h").value = "";
        document.getElementById("j").value = "";
        document.getElementById("w1").checked = true;
        document.getElementById("y").checked = true;
        document.getElementById("w2").checked = false;
        document.getElementById("w3").checked = false;
        element.style.display = 'none';
        element2.style.display = 'none';
        document.getElementById("c1").value = "";
        document.getElementById("k").value = "";
        document.getElementById("q1").value = "";
    }
</script>

<body>

    <h1 class="a">
        <center> Guia </center>
    </h1>
    <br>

    <table class="a7">
        <tr>
            <th>
                <input class="" id="" type="button" value="">
            </th>
            <th>
                
            </th>
            <th>
                
            </th>
            <th>
                
            </th>
        </tr>
    </table>

    <form>
        <center>
            <table>
                <td>
                    <tr>
                        <a class="f">Numero de Linea</a>
                        <input type="text" class="c11" id="b" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" onclick="javascript:limpiar()" required>

                        <a class="f">Segmento </a>
                        <select name="segmento">
                            <option value="1">Seleccionar</option>
                            <option value="1">Individual</option>
                            <option value="2">Coorporativo</option>
                        </select>
                    </tr>
                    <tr>
                        <a class="f">Nombre Completo</a> <input type="text" class="c11" id="d">
                    </tr>
                    <tr>
                        <a class="f">Ciudad Actual</a> <input type="text" class="c11" id="f">
                    </tr>
                </td>
                <h1 class="b">En caso de Nombre del titular incompleto</h1>
                <TR>
                    <TD id="n" class="f7">
                        Nombre completo del titular
                        <br><br>
                        Si
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="permis3" class="j2" id="w2" value="3" onchange="javascript:showContentt()"><br><br>
                        No
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="permis3" class="j2" id="w3" value="4" onchange="javascript:showContentt()"><br><br>
                    </TD>
                    <TD id="o" class="f7">
                        <div style="display: none;" id="xa">
                            <a class="f">Direccion Registrada en sistema</a> <input type="text" class="c11" id="h"><br>
                            <a class="f">Valor Ultima Factura Pagada</a> <input type="text" class="c11" id="j">
                        </div>
                    </TD>
                </TR>
            </table>
        </center>

        <div style="display: none;" id="bg">

            <h1 class="b"></h1>

            <center>
                <TABLE>
                    <TR>
                        <TD id="l" class="f7" style="text-align: center;">Equipo</TD>
                        <TD id="m" class="f7" style="text-align: center;">Motivo de LLamada</TD>
                    </TR>
                    <TR>
                        <TD id="n" class="f7">
                            Comprado
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="permisos" class="j2" id="w" value="1"><br><br>
                            Traido
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;
                            <input type="radio" name="permisos" class="j2" id="w1" value="2"><br><br>
                        </TD>
                        <TD id="o" class="f7"><br>
                            Fallas
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;
                            <input type="radio" name="permisos1" class="j2" id="y" value="Fallas" onchange="javascript:showContenttt()"><br><br>
                            Consultas
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="permisos1" class="j2" id="y1" value="Consultas" onchange="javascript:showContent()"><br><br>
                            Modificaciones
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="permisos1" class="j2" id="x" value="Modificaciones" onchange="javascript:showContent()">
                            <br><br>
                        </TD>
                        <TD id="b1" class="f7">
                            <div style="display: none;" id="p">Cedula del Cliente <input type="text" class="c11" id="c1"></div>
                        </TD>
                    </TR>

                </TABLE>
                <h1 class="b"></h1>
            </center>
            <div style="display: none;" id="cg">
                <center>
                    <table>
                        <TR>
                            <TD id="n" class="f7">
                                No navega <input type="radio" name="permisos11" class="j2" id="x9" value="Modificaciones" onchange="javascript:showContent1()">
                                <br><br><br>
                                <div style="display: none;" id="z9">
                                    Na <input type="radio" class="j2" id="a99" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a98" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a97" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a96" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a95" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a94" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a93" value="m1">
                                </div>
                                <br><br>
                            </TD>
                            <TD id="n" class="f7">
                                Intermitencia <input type="radio" name="permisos11" class="j2" id="x8" value="Modificaciones" onchange="javascript:showContent2()">
                                <br><br><br>
                                <div style="display: none;" id="z8">
                                    Na <input type="radio" class="j2" id="a92" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a91" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a90" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a89" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a88" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a87" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a86" value="m1">
                                </div>
                                <br><br>
                            </TD>
                            <TD id="n" class="f7">
                                Lentitud <input type="radio" name="permisos11" class="j2" id="x7" value="Modificaciones" onchange="javascript:showContent3()">
                                <br><br><br>
                                <div style="display: none;" id="z7">
                                    Na <input type="radio" class="j2" id="a99" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a85" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a84" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a83" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a82" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a81" value="m1">
                                    <br>
                                    Na <input type="radio" class="j2" id="a80" value="m1">
                                </div>
                                <br><br>
                            </TD>
                        </TR>
                    </table>
                </center>
            </div>
            <h1 class="b"></h1>
            <center>

                <TABLE>
                    <TR>
                        <TD>
                            <input type="text" class="e11" id="k" disabled>
                        </TD>
                        <TD class="f7">Indicaciones</TD>
                        <TD>
                            <textarea class="f11" id="q" maxlength="160"></textarea>
                        </TD>
                        <TD>
                            <input type="text" class="e11" id="k" disabled>
                        </TD>
                        <TD class="f7">Solucion</TD>
                        <TD>
                            <textarea class="f11" id="q1" maxlength="160"></textarea>
                        </TD>
                        <TD>
                            <input type="text" class="e11" id="k" disabled>
                        </TD>
                    </TR>
                </TABLE>
            </center>

            <center>
                <textarea class="d11" id="u" readonly onClick="copiarDatos()"></textarea>

            </center>
        </div>
    </form>

</body>

</html>