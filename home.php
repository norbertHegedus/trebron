<!DOCTYPE html>
<html>
<head>
    <title>Sintetik</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="form-header">
    <span>sintetik</span>
</div>
<div class="form">

    <div class="npt cod-postal">
        <input type="text" placeholder="COD POSTAL"/>
    </div>
    <div class="space-green"></div>
    <div class="npt range">
        <input name="radius" min="1" max="6" value="2" id="fader" step="1" onchange="outputUpdate(value)" list="volsettings" required="" type="range">
    </div>
    <div class="space-green"></div>
    <div class="npt tip">
        <select>
            <option>toate</option>
            <option>mic</option>
            <option>mediu</option>
            <option>mare</option>
        </select>
    </div>
    <div class="btn cauta">
        <span>cauta</span>
    </div>
    <div class="space-grey"></div>
    <div class="btn login">
        <span>log in</span>
    </div>
</div>
</body>
</html>