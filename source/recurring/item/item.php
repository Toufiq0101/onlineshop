<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="source/recurring/item/item.css">
        
    </head>

    <body>

        <div id="item">

            <div id="item_top">

                <img id="item_top_img" src="../../../images/CREME_001ssVTw3rE0za3M.jpg" alt="item imge">
                <div id="favourites">

                    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <g id="Love">
                            <path id="cls-1" d="M62,21a15.28,15.28,0,0,1-4.14,10.47L32,59,6.14,31.42A15.28,15.28,0,0,1,2,21C2,7.8,17.34,1,27.8,8.85L32,12l4.2-3.15C46.7,1,62,7.83,62,21Z"/>
                            <path id="cls-2" d="M32,61c-1.25,0,.87,1.86-27.32-28.21A17.28,17.28,0,0,1,0,21C0,6.13,17.24-1.56,29,7.25L32,9.5l3-2.25C46.77-1.56,64,6.14,64,21a17.31,17.31,0,0,1-4.68,11.84C31.2,62.78,33.24,61,32,61ZM17.83,7.53A13.45,13.45,0,0,0,4.93,25.85C6.22,29.09,5.8,28.13,32,56.08,59.14,27.14,57.8,29,59.07,25.84A13.3,13.3,0,0,0,57.85,13.7C53.46,7,43.94,5.55,37.4,10.45L33.2,13.6C30.13,15.9,27.33,7.53,17.83,7.53Z"/>
                        </g>
                    </svg>

                </div>
                <div id="item_tags">

                    <div><img src="" alt=""></div>

                </div>
                <div id="add_to_cart_all">

                    <button id="item_add" class=""><img src="../../../images/shopping-bag.png" alt="add to cart"></button>
                    <form action="item_backend.php" method="Post" id="item_add_pressed">    <!--  hier wahrscheinlich mit ajax arbeiten!!!!! -->

                        <input type="button" value="-" name="item_add_plus" id="item_add_plus" class="item_add_pressed_button"></input>
                        <label id="item_add_pressed_label">1</label>
                        <input type="button" value="+" name="item_add_minus" id="item_add_minus" class="item_add_pressed_button"></input>

                    </form>
                
                </div>
                
            </div>
            <div id="item_bottom">

                <div id="item_description">

                    test discription

                </div>
                <div id="item_price">

                    test item price

                </div>

            </div>

        </div>

    </body>

    <script src="source/recurring/item/item.js">



    </script>

</html>