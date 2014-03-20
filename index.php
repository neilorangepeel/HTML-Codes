<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HTML Codes</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="wrapper" id="htmlcodes">

            <input autofocus="autofocus" class="fuzzy-search search" placeholder="Search" name="search" />
            <table>

                    <tr>
                        <th></th>
                        <th></th>
                        <th>Entity</th>
                        <th>Decimal</th>
                        <th>Hex</th>
                    </tr>
                    
                    <tbody class="list">

                        <?php include('_/_inc/001-punctuation.php');?>
                        <?php include('_/_inc/002-latin-accent-characters.php');?>
                        <?php include('_/_inc/003-monetary-symbols.php');?>
                        <?php include('_/_inc/004-symbols.php');?>
                        <?php include('_/_inc/005-fractions.php');?>
                        <?php include('_/_inc/006-card-symbols.php');?>
                        <?php include('_/_inc/007-math-logic-symbols.php');?>
                        <?php include('_/_inc/008-arrows.php');?>
                        <?php include('_/_inc/009-special-symbols.php');?>
                        <?php include('_/_inc/010-greek-letters.php');?>
                        <?php include('_/_inc/011-the-planets.php');?>
                        <?php include('_/_inc/012-warning-symbols.php');?>
                        <?php include('_/_inc/013-chess-pieces.php');?>
                        <?php include('_/_inc/014-control-character-symbols.php');?>
                        <?php include('_/_inc/015-religious-political-symbols.php');?>
                        <?php include('_/_inc/016-cyrillic-alphabet.php');?>
                        <?php include('_/_inc/017-musical-symbols.php');?>
                        <?php include('_/_inc/018-dingbats.php');?>
                        <?php include('_/_inc/019-weather-meteorology.php');?>
                        <?php include('_/_inc/020-superscripts-subscripts.php');?>
                        <?php include('_/_inc/021-pointing-hands.php');?>
                        <?php include('_/_inc/022-hiragana.php');?>
                        <?php include('_/_inc/023-katakana.php');?>
                        <?php include('_/_inc/024-OCR-characters.php');?>
                        <?php include('_/_inc/025-IPA-characters.php');?>
                        <?php include('_/_inc/026-hebrew-characters.php');?>
                        <?php include('_/_inc/027-armenian-characters.php');?>
                        <?php include('_/_inc/028-dashes.php');?>
                        <?php include('_/_inc/029-frequencies-in-hertz.php');?>
                        <?php include('_/_inc/030-latin-extended-A-characters.php');?>

                    </tbody>
            </table>
        </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <!-- HTML Codes uses the handy list.js available here http://listjs.com -->
    <script src="_/_js/list-ck.js"></script>
    </body>
</html>