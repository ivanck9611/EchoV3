<div class="container lightGreen pullDown">
  <a href="index.php" target="myframe">HOME</a>
  <a>ARTICLES</a>
  <a>PORTFOLIO</a>
  <a>ABOUT</a>
  <a href="contactus.php" target="myframe">CONTACT</a>
</div>

<style>

.lightGreen
{
    background: #999;
}


div.container
{
    font-family: Raleway;
    margin: 0 auto;
	padding: 3em 1em;
	text-align: center;
}

div.container a
{
    color: #FFF;
    text-decoration: none;
    font: 20px Raleway;
    margin: 0px 10px;
    padding: 10px 10px;
    position: relative;
    z-index: 0;
    cursor: pointer;
}




div.pullDown a:before
{
    position: absolute;
    width: 100%;
    height: 2px;
    left: 0px;
    top: 0px;
    content: '';
    background: #FFF;
    opacity: 0.3;
    transition: all 0.3s;
}

div.pullDown a:hover:before
{
    height: 100%;
}

/* Pull up  */
div.pullUp a:before
{
    position: absolute;
    width: 100%;
    height: 2px;
    left: 0px;
    bottom: 0px;
    content: '';
    background: #FFF;
    opacity: 0.3;
    transition: all 0.3s;
}

div.pullUp a:hover:before
{
    height: 100%;
}
</style>
