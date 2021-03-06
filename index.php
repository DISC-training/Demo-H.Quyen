<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Bootstrap</title>
    <link rel="stylesheet" href="HQ.css">
    <link rel="shortcut icon" href="./1.png" type="image/x-icon">
</head>
<body>
    <img src="1.png" alt="" class="img">
    <div class="text center"> 
        Checkout form 
    </div>
    <div class="text1 center">
        Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.
    </div>
    <div class="big_table">
        <div class="C1">
            <form action="link_server.php">
            <div class="c1_r1">
            Billing address      
            </div>
            <div class="fontsize separate">
                <div class="fontsize_2 firstbox" >
                    <label for="first_name">First name</label>
                    <div>
                        <input class="tag firstbox" type="text" id="first_name">
                    </div>
                </div>
                <div class="fontsize_2" >
                    <label for="last_name">Last name</label>
                    <div >
                        <input class="tag lastbox" type="text"  id="last_name">
                    </div>
                </div>
            </div>
            <div class="fontsize ">
                <div>
                    <label for="username">Username</label>
                    <div class="user">
                        <span class="icon">@</span>
                        <input class=" usernamebox" required type="email" id="username" placeholder="Username">
                    </div>
                </div>
            </div>
            <div class="fontsize">
                <label for="email">Email</label>
                <label for="email" class="option">
                    (Optional)
                </label>
                <div >
                    <input class="tag boxemail" type="text" id="email" placeholder="you@example.com">
                </div>
            </div>
            <div class="fontsize">
                <label for="address">Address</label>
                <div ">
                    <input class="tag boxemail" type="text" id="address" placeholder="1234 Main St">
                </div>
            </div>
            <div class="fontsize">
                <label for="address_2">Address 2</label>
                <label for="address_2" class="option">
                    (Optional)
                </label>
                <div >
                    <input class="tag boxemail" type="text"  id="address_2" placeholder="Apartment or suite">
                </div>
            </div>
            <div class="separate">
                <div class="fontsize country">
                    Country
                    <div >
                        <select class="tag " id="country">
                            <option value="Choose...">Choose...</option>
                            <option value="United States">United States</option>
                        </select>
                    </div>
                </div>
                <div class="fontsize state">
                    State
                    <div >
                        <select class="tag " id="state">
                            <option value="Choose...">Choose...</option>
                            <option value="California">California</option>
                        </select>
                    </div>
                </div>
                <div class="fontsize zip">
                    <label for="zip">Zip</label>
                    <div >
                        <input class="tag" type="text" id="zip">
                    </div>
                </div>
            </div>
            <hr>
            <div class="fontsize CB1">
                <input type="checkbox" name="CB1" id="CB1">
                <label for="CB1">Shipping address is the same as my biling address</label> 
            </div>
            <div class="fontsize CB1">
                <input type="checkbox" name="CB2" id="CB2">
                <label for="CB2">Save this information for next time</label>
            </div>
            <hr>
            <div class="fontsize">
                <div class="c1_r2">
                    Payment
                </div>
                <div class="r1">
                    <input type="radio" name="R1" id="R1" checked required>
                    <label for="R1">Credit card</label>
                </div>
                <div class="r1">
                    <input type="radio" name="R1" id="R2">
                    <label for="R2">Debit card</label>
                </div>
                <div class="r1">
                    <input type="radio" name="R1" id="R3">
                    <label for="R3">Paypal</label>
                </div>
            </div>
            <div class="separate">
                <div class="fontsize firstbox r1">
                    <label for="N_O_C">Name on card</label>
                    <div>
                        <input class="tag" type="text" id="N_O_C">
                    </div>
                    <div>
                        Full name as displayed on card
                    </div>
                </div>
                <div class="fontsize firstbox r1 ">
                    <label class="r1" for="C_C_N">Credit card number</label>
                    <div>
                        <input class="tag" type="text" id="C_C_N">
                    </div>
                </div>
            </div>
            <div class="separate">
                <div class="ECVV ">
                    <label class="r1" for="expiration">Expiration</label>
                    <div>
                        <input class="tag expiration" type="text" id="expiration">
                    </div>
                </div>
                <div >
                    <label class="r1" for="CVV">CVV</label>
                    <div>
                        <input class="tag CVV" type="text" id="CVV">
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="button_submit">Continue to checkout</button>
        </form>
        </div>
        <div class="C2">
            <h4 class="C2_flex">
            <span class="your_cart"> Your cart</span>
            <span class="num3">3</span>
            </h4>
            <div>
                <ul class="list-group">
                    <li class="memoflist borderradius">
                        <div > 
                            <h6 class="big-X">Product name</h6>
                            <small class="small-X">Brief description</small>
                        </div>
                        <span class="small-X fontDL">$12</span>
                    </li>
                    <li class="memoflist">
                        <div > 
                            <h6 class="big-X">Second product</h6>
                            <small class="small-X">Brief description</small>
                        </div>
                        <span class="small-X fontDL">$8</span>
                    </li>
                    <li class="memoflist">
                        <div > 
                            <h6 class="big-X">Third item</h6>
                            <small class="small-X">Brief description</small>
                        </div>
                        <span class="small-X fontDL">$5</span>
                    </li>
                    <li class="memoflist">
                        <div class="promodecode">
                            <h6 class="big-X">Promode code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="promodecode">-$5</span>
                    </li>
                    <li class="memoflist borderradius2 ">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>
            </div>
            <form class="formredeem" action="link_server.php">
            <div class="inputgroup">
                <input type="text" class="form_control" placeholder="Promo code">
                <div class="redeem">
                    <button type="submit" class="button_redeem">Redeem</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <footer class=" center">
        <div class="text2">© 2017-2018 Company Name</div>
        <ul class="footer">
            <li class="item">
                <a href="file:///D:/test%201/part1.html">Privacy</a>
            </li>
            <li class="item">
                <a href="file:///D:/test%201/part1.html">Terms</a>
            </li>
            <li class="item">
                <a href="file:///D:/test%201/part1.html">Support</a>
            </li>
            </ul>
    </footer>
</body>
</html>