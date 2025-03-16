<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio de Jensen Ballen Banguera</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido a mi Portafolio</h1>
        <p style="text-align: justify; margin-bottom: 1em;">Hola, soy Jensen Ballen Banguera, tengo 18 años y soy aprendiz del SENA en Tuluá, Valle del Cauca, en la formación en la sede Sagrado en la jornada mixta. Estoy en la etapa lectiva desde el 7/11/2023 hasta el 7/8/2025 y comenzaré la práctica el 8/8/2025 hasta el 6/2/2026.</p>
        <p style="text-align: justify; margin-bottom: 1em;">Vivo en Tuluá, Colombia.</p>
    </header>
    <section id="proyectos">
        <h2>Proyectos</h2>
        <ul>
            <?php
            include 'bd/conexion.php';

            $sql = "SELECT nombre, descripcion FROM proyectos";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["nombre"] . ": " . $row["descripcion"] . "</li>";
                }
            } else {
                echo "<li>No hay proyectos disponibles.</li>";
            }
            ?>
        </ul>
    </section>
    <section id="documentos">
        <h3>Foto</h3>
        <img src="ruta/a/tu/foto.png" alt="Foto de Jensen Ballen Banguera" />
        <h2 style="text-align: justify;">Documentos</h2>
        <h3 style="text-align: justify;">Constancia de Titulación</h3>
        <p>
            EL CENTRO LATINOAMERICANO DE ESPECIES MENORES<br>
            HACE CONSTAR<br>
            REGIONAL VALLE<br>
            Que  JENSEN  BALLEN  BANGUERA  identificada(o)  con  Cédula  de  Ciudadanía  No.<br>
            1111761852  se  encuentra  cursando  el  programa  de  TECNÓLOGO  EN  ANALISIS  Y<br>
            DESARROLLO DE SOFTWARE. el cual inició 07 de NOVIEMBRE de 2023  y finalizará 06 de<br>
            FEBRERO de 2026, en modalidad Presencial, con el siguiente horario:<br>
            DÍAHORA INICIOHORA FIN<br>
            23:5900:00LUNES<br>
            23:5900:00MARTES<br>
            23:5900:00MIERCOLES<br>
            23:5900:00JUEVES<br>
            23:5900:00VIERNES<br>
            23:5900:00SABADO<br>
            JORGE IVAN NOGUERA JIMENEZ<br>
            SUBDIRECTOR (A) ENCARGADO (A)<br>
            Se expide en TULUÁ a los 06 días del mes de MARZO de 2025<br>
            CENTRO LATINOAMERICANO DE ESPECIES MENORES<br>
            Ministerio del Trabajo<br>
            SERVICIO NACIONAL DE APRENDIZAJE<br>
            NIT 899999034-1 / Ley 119 de 1994<br>
            Carretera Central a Cali kilómetro 2     TULUÁ COLOMBIA<br>
            JENSEN BALLEN BANGUERA<br>
            TECNÓLOGO EN ANALISIS Y DESARROLLO DE SOFTWARE.<br>
        </p>
        <h3 style="text-align: justify;">Hoja de Vida</h3>
        <p>
            HOJA DE VIDA APRENDICES EN PROGRAMAS DE FORMACION TITULADA<br>
            F04-9124-002/ 06-10<br>
            Ejecución de la Formación Profesional<br>
            Desarrollo Curricular <br><br>
            INFORMACION GENERAL DEL APRENDIZ<br>
            Información personal del aprendiz. Usted como empleador podrá solicitar ampliación de esta.<br>
            NOMBRES Y APELLIDOS<br>
            JENSEN BALLEN BANGUERA<br>
            DOCUMENTO IDENTIDAD<br>
            1111761852<br>
            FECHA NACIMIENTO<br>
            20/06/2005<br>
            EDAD<br>
            18<br>
            TELEFONOS<br>
            3115009832                 SENGUNDO 3135882757<br>
            CORREO ELECTRONICO MISENA<br>
            Jensen_ballen@soy.sena.edu.co<br>
            LIBRETA MILITAR<br>
            NO<br>
            DIRECCION DOMICILIO<br>
            CRa 22ª CL 7ª #18 MUNIPAL<br>
            ESTRATO<br>
            2<br>
            CIUDAD<br>
            TULUÁ VALLE<br>
            FORMACION ACADEMICA<br>
            TITULO OBTENIDO<br>
            BACHILLER TECNICO CON ESPECIALIDA EN ELECTRONICA<br>
            INSTITUCIÓN EDUCATIVA<br>
            TECNICA INDUSTRIAL CARLOS SARMIENTO LORA<br>
            FECHA DE GRADO<br>
            24/11/2022<br>
            NOMBRE DEL PROGRAMA<br>
            ANALISIS Y DESARROLLO DE SOFTWARE<br>
            CODIGO DE FICHA<br>
            2847523<br>
            PERFIL OCUPACIONAL<br>
            PYTHON, JAVA, HTML, BASE DE DATOS y PHP<br>
            OCUPACIONES A DESEMPEÑAR<br>
            ANALIZAR LENGUAJES DE PROGRAMACION<br>
            CENTRO DE FORMACION<br>
            LATINOAMERICANO DE ESPECIES MENORES SEDE SAGRADO<br>
            CIUDAD DE FORMACION<br>
            TULUÁ<br>
            FECHA DE INICIO<br>
            7/11/2023<br>
            FECHA DE TERMINACION<br>
            6/2/2026<br>
            ETAPA (Lectiva- Practica)<br>
            LECTIVA 7/11/2023 hasta 6/8/2025 PRACTICA 7/8/2025 hasta 6/2/2026 <br>
            COORDINADOR ACADEMICO<br>
            PAOLA ANDREA RESTREPO<br>
            TELEFONO CONTACTO<br>
            3174428424<br>
            CORREO ELECTRONICO<br>
            pprestrepoc@sena.edu.co <br>
            FIRMA DEL APRENDIZ<br>
            MANIFIESTO BAJO LA GRAVEDAD DEL JURAMENTO QUE NO ME ENCUENTRO DENTRO DE LAS CAUSALES DE INHABILIDAD E INCOMPATIBILIDAD QUE CONTRAVENGAN EL REGLAMENTO ESTUDIANTIL O TERMINOS LEGALES, PARA DESARROLLAR LA ETAPA PRÁCTICA DESEMPEÑANDOME EN UNA EMPRESA A TRAVÉS DEL CONTRATO DE APRENDIZAJE. PARA TODOS LOS EFECTOS LEGALES, CERTIFICO QUE LOS DATOS POR MI ANOTADOS EN EL PRESENTE FORMATO DE HOJA DE VIDA, SON VERACES<br>
            Ciudad y Fecha de Diligenciamiento: TULUÁ 13/3/2025     FIRMA: jensen<br>
        </p>

        <h2>Contacto</h2>
        <p>Puedes contactarme a través de mi correo electrónico: jensenbangueragmail.com o mi número: 3115009832.</p>
    </section>
    <footer>
        <p>&copy; 2023 Jensen Ballen Banguera. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
