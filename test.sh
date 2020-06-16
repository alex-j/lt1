curl http://localhost/shop/product?test -X POST
printf "\n"
curl http://localhost/shop/product/2?test -X DELETE
printf "\n"
curl http://localhost/shop/product/3/cover-image?test -X PUT
printf "\n"
curl http://localhost/shop/order/4?test -X POST
printf "\n"
curl http://localhost/shop/feedback/5?test -X POST
printf "\n"
curl http://localhost/shop/feedback/4?test -X GET
printf "\n"
curl http://localhost/shop/like/6?test -X POST
printf "\n"
curl http://localhost/shop/like/6?test -X DELETE
printf "\n"
curl http://localhost/shop/wish-list/7?test -X POST
printf "\n"

curl http://localhost/shop/payment/apple-pay/512?test -X POST
printf "\n"
curl http://localhost/shop/payment/apple-pay/512?test -X GET
printf "\n"

curl http://localhost/shop/payment/stripe/512?test -X POST
printf "\n"
curl http://localhost/shop/payment/stripe/512?test -X GET
printf "\n"

curl http://localhost/shop/payment/pay-pal/512?test -X POST
printf "\n"
curl http://localhost/shop/payment/pay-pal/512?test -X GET
printf "\n"






