<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <head>
        <title>TD06_Exo2_Transmission_Form</title>
        <?php
        include('../pagetype/header.php');
        ?>
    </head>

    <body>
        <div id="global">
            <div id="entete">
                <?php
                include('../pagetype/entete.php');
                ?>
            </div><!-- #entete -->
            <div id="centre">
                <div id="navigation">
                    <?php
                    include('../pagetype/navigation.php');
                    ?>
                </div><!-- #navigation -->
                <div id="contenu">
                  
                    <form id='ecoles' name='ecoles' method='post' action='TD06_exo3_cookie_pose.php'>
                        <input type='hidden' id='ville' name='ville' value='Troyes' />
                        <input type='hidden' id='effectif' name='effectif' value='3000' />
                        <input type='submit' id='BT_SUB' value='UTT' />   
                    </form>
               
                    <form id='ecoles' name='ecoles' method='post' action='TD06_exo3_cookie_pose.php'>
                        <input type='hidden' id='ville' name='ville' value='Shangaï' />
                        <input type='hidden' id='effectif' name='effectif' value='3200' />
                        <input type='submit' id='BT_SUB' value='UTSEUS' />   
                    </form>
                   


                </div><!-- #contenu -->
            </div><!-- #centre -->
            <div id="pied">
                <p id="copyright">
                    <?php
                    include('../pagetype/footer.php');
                    ?>
                </p>
            </div><!-- #pied -->
        </div><!-- #global -->

    </body>


</html>

