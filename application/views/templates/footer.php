<article>
    <style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }
        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 280px;
            background:
                /* color overlay */
                linear-gradient(
                    rgba(240, 212, 0, 0.45),
                    rgba(0, 0, 0, 0.45)
                ),
                    /* image to overlay */
                url(http://images.cdn.fotopedia.com/_avPIZmqM3w-7z161LH_268-hd.jpg);
        }


        /* Custom footer CSS
        -------------------------------------------------- */

        .container {
            width: auto;
            max-width: 2350px;
            padding: 0 3px;
        }
        .container .text-muted {
            margin: 20px 0;
        }
        .footertext {
            color: #ffffff;
        }

    </style>


    <div id="footer">
        <div class="container">
            <div class="row">
                <h3 class="footertext">About Us:</h3>
                <br />
                <div class="col-md-4">
                    <center>
                        <img src="<?php echo base_url();?>/asset/images/programmer.png" class="img-circle" alt="the-brains">
                        <br>
                        <h4 class="footertext">Programmer</h4>
                        <p class="footertext">You can thank all the crazy programming here to this guy.<br>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="<?php echo base_url();?>/asset/images/artist.png" class="img-circle" alt="...">
                        <br>
                        <h4 class="footertext">Artist</h4>
                        <p class="footertext">All the images here are hand drawn by this man.<br>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="<?php echo base_url();?>/asset/images/designer.png" class="img-circle" alt="...">
                        <br>
                        <h4 class="footertext">Designer</h4>
                        <p class="footertext">This pretty site and the copy it holds are all thanks to this guy.<br>
                    </center>
                </div>
            </div>
            <div class="row">
                <p><center><a href="<?php echo site_url('pages/get_about_page');?>">Contact Stuff Here</a>
            </div>
        </div>
    </div>

</article>

</div>
</body>
</html>
