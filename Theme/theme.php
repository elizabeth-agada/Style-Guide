<?php
function getTheme(){
    return trim(file_get_contents("selected_theme.txt"));
}

function setTheme($theme)
{
    file_put_contents("selected_theme.txt", $theme);
}
$availableThemes = ["default", "decode", "grey"];

if (isset($_POST["themeSelect"]) && in_array($_POST["themeSelect"], $availableThemes))
{
    setTheme($_POST["themeSelect"]);
}

?>
<!doctype html>
<html lang="en">
    <head>
    <title>theme selector</title>
<link rel="shortcut icon" href="/assets/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link id="themeStylesheet" href="css/<?= getTheme()?>.css" rel="stylesheet" type="text/css">
        </head>
<body>
    <h1>Theme selector</h1>
    <div class="main-content">
        <p>
            This will change the theme of the page as specified by the user.
            This will change the theme of the page as specified by the user.
            This will change the theme of the page as specified by the user.
            This will change the theme of the page as specified by the user.
        
        
        
        </p>
    
    <form action="./" method="post">
        <select name="themeSelect" id="themeSelect">
        
            <option value="default" <?= getTheme() === "defaault" ? "selected" : "" ?> >Default</option>
                        <option value="dcode" <?= getTheme() === "dcode" ? "selected" : "" ?> >dcode</option>
                        <option value="grey" <?= getTheme() === "grey" ? "selected" : "" ?> >grey</option>
            <input type="submit" value="Save Theme">
        
        
        </select>
        
        </form>    
    </div>
    <script>
        const themeSelect = document.getElementById("themeSelect");
         const themeStylesheet = document.getElementById("themeStylesheet");
        
        themeSelect.addEventListener("change", function(){
            themeStylesheet.setAttribute("href", "css/" + this.value + ".css");
        });
    
    
    
    </script>


</body>
    </html>