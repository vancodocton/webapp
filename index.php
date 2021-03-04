<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
		<script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script> 
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.24.0/babel.js"></script>
    </head>
    <body>
        <h1>Index page</h1>

        <div class="container-fluid">
            <div id="root"></div>
        </div>
        <div>
            <h1>JSON</h1>
            <p id="json-encode"></p>
            <p id="json-decode"></p>
        </div>
        <!-- Optional JavaScript -->
        <script type="text/jsx">
            // var xhttp = new XMLHttpRequest();
            // xhttp.onreadystatechange = function () {
            //     if (this.readyState == 4 && this.status == 200) {
            //         var strJSON = this.responseText;
            //         document.getElementById("json-encode").innerHTML = strJSON;

            //         var array = JSON.parse(strJSON);
            //         document.getElementById("json-decode").innerHTML =
            //             array[0]["name"];
            //     }
            // };
            // xhttp.open("GET", "./loadProducts.php", true);
            // xhttp.send();
            ReactDOM.render(<h1>Hello</h1>, document.getElementById('root'));
       </script>
    </body>
</html>
