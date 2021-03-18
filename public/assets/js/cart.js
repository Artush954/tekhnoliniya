$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    const token = $("#token").val()

    const key = 'tekhnoliniya_items';

    $(document).on('click', '.addCart', function () {
        let $id = $(this).attr('data-id');
        let $title = $(this).attr('data-title');
        let $image = $(this).attr('data-image');
        let $price = $(this).attr('data-price');

        if (localStorage.getItem(key)) {
            let data = JSON.parse(localStorage.getItem(key));
            let currentIndex = data.findIndex((item) => item.id === $id);

            if (currentIndex >= 0) {
                data[currentIndex].count = data[currentIndex].count + 1;
                data[currentIndex].totalPrice = data[currentIndex].count * data[currentIndex].price;
            } else {
                let obj = {
                    id: $id,
                    title: $title,
                    image: $image,
                    price: $price,
                    count: 1,
                    totalPrice: $price,
                };
                data.push(obj);
            }

            localStorage.setItem(key, JSON.stringify(data));
        } else {
            let obj = {
                id: $id,
                title: $title,
                image: $image,
                price: $price,
                count: 1,
                totalPrice: $price,
            };
            let arr = [];
            arr.push(obj)
            localStorage.setItem(key, JSON.stringify(arr));
        }
        getCartCount()

    })

    function getCartCount() {
        let totalCount = 0;
        if (localStorage.getItem(key)) {
            JSON.parse(localStorage.getItem(key)).forEach(item => {
                totalCount += item.count;
            })
        }
        $('.cart-count').html(totalCount)
    }

    getCartCount()

    function increaseCount($id) {

        if (localStorage.getItem(key)) {
            let data = JSON.parse(localStorage.getItem(key));
            let currentIndex = data.findIndex((item) => (item.id * 1) === $id);
            data[currentIndex].count = data[currentIndex].count + 1;
            data[currentIndex].totalPrice = data[currentIndex].count * data[currentIndex].price;

            localStorage.setItem(key, JSON.stringify(data));

            getCartCount()
            renderCart();

        }
    }

    function decreaseCount($id) {
        if (localStorage.getItem(key)) {
            let data = JSON.parse(localStorage.getItem(key));
            let currentIndex = data.findIndex((item) => (item.id * 1) === $id);

            data[currentIndex].count = data[currentIndex].count - 1;
            data[currentIndex].totalPrice = data[currentIndex].count * data[currentIndex].price;

            localStorage.setItem(key, JSON.stringify(data));

            getCartCount()
            renderCart();

        }
    }


    function renderCart() {
        if (localStorage.getItem(key)) {
            $('.cart-content').empty();
            JSON.parse(localStorage.getItem(key)).forEach(item => {
                let template = `<tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="/images/${item.image}" alt="${item.title}">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="#">${item.title}</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">${item.price} &#8381;</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity" data-id="${item.id}">
                                            <input type="number" class="form-control" value="${item.count}" min="1" max="1000" step="1" data-decimals="0" required>
                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    <td class="total-col">${item.totalPrice} &#8381;</td>
                                    <td class="remove-col"><button class="btn-remove" data-id="${item.id}"><i class="icon-close"></i></button></td>
                                </tr>`;


                $('.cart-content').append(template);
            })
            totalSum()

        }
    }

    renderCart()

    $(document).on('click', '.btn-increment', function () {
        let currentId = $(this).parents('.cart-product-quantity').data('id');
        increaseCount(currentId)
        // Quantity Input - Cart page - Product Details pages
        quantityInputs()
        totalSum()
    })

    $(document).on('click', '.btn-decrement', function () {

        let currentId = $(this).parents('.cart-product-quantity').data('id');
        decreaseCount(currentId)
        // Quantity Input - Cart page - Product Details pages
        quantityInputs()
        totalSum()
    })

    // Quantity Input - Cart page - Product Details pages
    function quantityInputs() {
        if ($.fn.inputSpinner) {
            $("input[type='number']").inputSpinner({
                decrementButton: '<i class="icon-minus"></i>',
                incrementButton: '<i class="icon-plus"></i>',
                groupClass: 'input-spinner',
                buttonsClass: 'btn-spinner',
                buttonsWidth: '26px'
            });
        }
    }

    $(document).on('click', '.btn-remove', function () {
        let $id = $(this).attr('data-id');
        let data = JSON.parse(localStorage.getItem(key));
        console.log(data)
        let currentIndex = data.find((item) => item.id === $id)
        data.splice(currentIndex, 1);
        localStorage.setItem(key, JSON.stringify(data));
        $(this).parents('tr').remove();
        getCartCount()
    })

    function totalSum() {
        let totalSum = 0;
        if (localStorage.getItem(key)) {
           JSON.parse(localStorage.getItem(key)).forEach(item => {
                totalSum += item.totalPrice;
            })
            $('.totalCount').html(totalSum+' &#8381;')
        } else {
            $('.totalCount').html('0 &#8381;')
        }
    }


    $(document).on('click', '.addOrder', function () {

        let name = $(".name").val();
        let email = $(".email").val();
        let desc = $('#desc').val();
        let data = JSON.parse(localStorage.getItem(key))

        if (data) {
            $.ajax({
                type: 'post',
                url: "addOrder",
                data: {data: data, name: name, email: email,desc:desc},
                dataType: "json",
                success: function (r) {

                }
            })
        } else {
            alert("chka jahel");
        }

    })


})
