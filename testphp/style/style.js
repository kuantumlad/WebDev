var imgArray = new Array();

imgArray[0] = new Image();
imgArray[0].src = 'img/ec_edepcp.jpg';

imgArray[1] = new Image();
imgArray[1].src = 'img/protoncut.jpg';

imgArray[2] = new Image();
imgArray[2].src = 'img/missing4vmntmzoom.jpg';

/*------------------------------------*/

function nextImage(element)
{
    var img = document.getElementById(element);
   
    for(var i = 0; i < imgArray.length;i++)
    {
        if(imgArray[i].src == img.src)
        {
           /* alert("<3 AMERICA"); */
            if(i == imgArray.length-1 ){
                document.getElementById(element).src = imgArray[0].src;
                break;
            }
            document.getElementById(element).src = imgArray[i+1].src;
            break;
        }
    }
}


