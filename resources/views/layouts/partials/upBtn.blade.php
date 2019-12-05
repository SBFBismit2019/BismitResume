<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        #upBtn {
        color:rgb(77, 55, 18);
        background:#FFB736;
        border:none;
        outline:none;
        position: fixed;
        z-index:1;
        bottom: 60px;
        right:40px;
        animation: anim .2s ease-in;
        }
        @keyframes anim{
            from{
                opacity: 0;
            }
            to{
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<button id="upBtn"><i class="fas fa-chevron-up fa-2x"></i></button>
</body>
<!-- scripts -->
<script>
    var btn = document.querySelector("#upBtn");
    btn.addEventListener("click",function(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
    })
    function changeBtn() {
        pos = window.scrollY;
        if (pos > 1200) {
            btn.style.display = "block";
        }
        else {
            btn.style.display = "none";
        }
    }
    setInterval(changeBtn,100);
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>