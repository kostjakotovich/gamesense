<div class="cart-modal hidden">
    <div class="cart-container">
        <div class="cart-inner-top">
            <div class="cart-top">
                <div class="card-top-title">My shopping cart</div>
                <a href="#" loading="lazy" draggable="false" class="close-cart" id="closeCart">
                    <img src="images/ui-icons/close.svg" alt="Close" class="close-cart-img" loading="lazy" draggable="false">
                </a>
            </div>
        </div>

        <div class="cart-content">
        </div>

        <div class="cart-empty">
            <img src="images/ui-icons/shopping-cart-empty.svg" alt="" class="cart-empty-img" loading="lazy" draggable="false">
            <div class="empty-title">Shopping cart is empty</div>
            <div class="empty-text">
                It seems your cart is empty, but don't worry! We have an amazing selection of games waiting for you. 
            </div>
            <a href="/" class="shopping-button" draggable="false">
                Go shopping
            </a>
        </div>

        <div class="cart-content-bottom">
            <div class="total-cart-price">
                <div class="total-cart-price-text">Total :</div>
                <div class="total-cart-price-number"></div>
            </div>

            <div class="bottom-actions">
                <a class="view-cart" href="/" draggable="false">View cart</a>
                <a class="checkout-now" href="/" draggable="false">Checkout now</a>
            </div>
        </div>
        
    </div>
</div>

<script>
    function getCartItems() {
        let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        return cartItems;
    }

    function initializeCartButtons(){
        let cartAddButton = document.querySelectorAll('.card-button');

        cartAddButton.forEach(button => {
            button.addEventListener('click', function(){
                addToCart(button);
                updateCartDisplay();
            })
            
        })
    }

    function addToCart(button){
        let card = button.closest('.card');

        let gameName = card.querySelector('.card-title').textContent;
        let gameCover = card.querySelector('.card-img').getAttribute('src');
        let gamePriceText = card.querySelector('.card-price').textContent;
        let gamePrice = parseFloat(gamePriceText.replace('$', '').replace(',', '.').trim());
        let quantity = 1;

        let gameItem = {
            gameName: gameName,
            gameCover: gameCover,
            gamePrice: gamePrice,
            quantity: quantity
        }

        let cartItems = getCartItems();

        let existingGame = cartItems.find(item => item.gameName === gameName);
        if(existingGame){
            existingGame.quantity += 1;  
        }else{
            cartItems.push(gameItem)
        }

        localStorage.setItem('cart', JSON.stringify(cartItems));
    }
    
    function updateCartDisplay(){
        let cartItems = getCartItems();
        let cartItemsCount = document.querySelector('.cart-item-count');
        let cartContent = document.querySelector('.cart-content');
        let cartEmpty = document.querySelector('.cart-empty');
        let cartContentBottom = document.querySelector('.cart-content-bottom');

        cartContent.innerHTML = "";
        
        if(cartItems.length > 0){
            toggleCartDisplay('filled');
            cartItems.forEach(item => renderCartItem(item, cartContent));

            addEventListeners();
            getTotalCartPrice();
            getTotalCartItemsCount();
            
        }else{
            toggleCartDisplay('empty');
        };
    }

    function renderCartItem(item, cartContent){
        let totalGamePrice = (item.gamePrice * item.quantity).toFixed(2);

        let cartCard = document.createElement('div');
        cartCard.className = 'card-content-card';

        cartCard.innerHTML = `
            <div class="cart-content-inner">
                <div class="cart-content-left">
                    <img src="${item.gameCover}" alt="cart-game-img" class="cart-game-img" alt="offer-game" draggable="false">
                </div>
                <div class="cart-content-right">
                    <div class="content-inner-top">
                        <div class="cart-game-title">${item.gameName}</div>
                        <button class="cart-trashcan" data-game-name="${item.gameName}">
                            <img src="images/ui-icons/trash-can.svg" alt="trash can" class="cart-trashcan-img" loading="lazy" draggable="false">
                        </button>
                    </div>

                    <div class="content-inner-bottom">
                        <div class="cart-game-qnt">
                            <button class="quantity-btn decrease" data-game-name="${item.gameName}">-</button>
                            <span class="quantity-number">${item.quantity}</span>
                            <button class="quantity-btn increase" data-game-name="${item.gameName}">+</button>
                        </div>
                        <div class="cart-game-price">${totalGamePrice}$</div>
                    </div>
                </div>
            </div>
        `;

        cartContent.appendChild(cartCard);
    }

    function toggleCartDisplay(state){
        let cartItemsCount = document.querySelector('.cart-item-count');
        let cartEmpty = document.querySelector('.cart-empty');
        let cartContentBottom = document.querySelector('.cart-content-bottom');

        if(state === 'filled'){
            cartEmpty.style.display = 'none';
            cartItemsCount.style.display = 'flex';
            cartContentBottom.style.display = 'block';
        }else{
            cartEmpty.style.display = 'flex';
            cartItemsCount.style.display = 'none';
            cartContentBottom.style.display = 'none';
        }
    }

    function addEventListeners(){
        addTrashCanEventListeners();
        addQuantityButtonsEventListeners();
        updateButtonState();
    }

    function addTrashCanEventListeners(){
        let trashCanButton = document.querySelectorAll('.cart-trashcan');
        trashCanButton.forEach(button => {
            button.addEventListener('click', function(){
                let gameName = button.getAttribute('data-game-name');
                removeGameFromCart(gameName);
            })
        });
    }

    function addQuantityButtonsEventListeners(){
        let decreaseButtons = document.querySelectorAll('.quantity-btn.decrease');
        let increaseButtons = document.querySelectorAll('.quantity-btn.increase');

        decreaseButtons.forEach(button => {
            button.addEventListener('click', function(){
                let gameName = button.getAttribute('data-game-name');
                updateQuantity(-1, gameName);
            })
        })

        increaseButtons.forEach(button => {
            button.addEventListener('click', function(){
                let gameName = button.getAttribute('data-game-name');
                updateQuantity(1, gameName);
            })
        })
    }

    function updateQuantity(qntChange, gameName){
        let cartItems = getCartItems();

        cartItems = cartItems.map(item => {
            if(item.gameName === gameName){
                item.quantity += qntChange;
                if(item.quantity < 1){
                    item.quantity = 1;
                }
            }
            return item;
        })

        localStorage.setItem('cart', JSON.stringify(cartItems));
        updateCartDisplay();
        updateButtonState();
    }

    function updateButtonState(){
        let cartItems = getCartItems();

        cartItems.forEach(item => {
            let decreaseButton = document.querySelector(`.quantity-btn.decrease[data-game-name="${item.gameName}"]`);

            if(item.quantity <= 1){
                decreaseButton.classList.add('disabled');
                decreaseButton.disabled = true;
            }
            else{
                decreaseButton.classList.remove('disabled');
                decreaseButton.disabled = false;
            }
        })
    }

    function removeGameFromCart(gameName) {
        let cartItems = getCartItems();

        cartItems = cartItems.filter(item => item.gameName !== gameName);
        localStorage.setItem('cart', JSON.stringify(cartItems));
        updateCartDisplay();
    }

    function getTotalCartPrice(){
        let cartItems = getCartItems();
        let totalCartPrice = cartItems.reduce((totalCartPrice, item) => totalCartPrice + (item.gamePrice * item.quantity), 0);

        totalCartPrice = totalCartPrice.toFixed(2);

        document.querySelector('.total-cart-price-number').textContent = `${totalCartPrice}$`;
    }

    function getTotalCartItemsCount(){
        let cartItems = getCartItems();
        let totalCartItemsCount = cartItems.reduce((total, item) => total + item.quantity, 0);

        document.querySelector('.cart-item-count').textContent = totalCartItemsCount;
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        updateCartDisplay();
        initializeCartButtons();
    });

</script>