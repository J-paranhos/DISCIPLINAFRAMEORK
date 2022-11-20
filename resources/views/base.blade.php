<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATIVIDADE OFFICIAL 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>


    <div class="container">

        <div class="row">

            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="https://github.com/J-paranhos/DISCIPLINAFRAMEORK/tree/ATV1" target="_blank" >ATV1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://github.com/J-paranhos/DISCIPLINAFRAMEORK/tree/ATV2" target="_blank">ATV2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://github.com/J-paranhos/DISCIPLINAFRAMEORK/tree/ATV3" target="_blank">ATV3</a>

                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://github.com/J-paranhos/DISCIPLINAFRAMEORK/tree/ATV4" target="_blank">ATV4</a>

                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://github.com/J-paranhos/DISCIPLINAFRAMEORK/tree/ATV5" target="_blank">ATV5</a>

                </li>


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://github.com/J-paranhos/DISCIPLINAFRAMEORK/tree/OFF2/" target="_blank">OFF 2</a>

                </li>

              </ul>

        </div>

    <div class="row">
    @yield('contuedo')
    </div>
    </div>


    <script>


(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

funcion DesabilitarRequirido()
{

document.getElementById("Idname").removeAttribute("required");
document.getElementById("Idenedereco").removeAttribute("required");
document.getElementById("IdEmail").removeAttribute("required");
document.getElementById("Idsobenome").removeAttribute("required");
document.getElementById("Idnome").removeAttribute("required");

}


        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">



    </script>



</body>
</html>
