//this tells the JavaScript file where the form is in my HTML code, and creates an event
//listener that will execute the submitForm function when the "submit" button is clicked.
//EVENT LISTENERS
document.getElementById("shop-babytees").addEventListener("submit", submitForm);

//this listener will execute the cancelOrder function when the "cancel" button is clicked.
document.getElementById("shop-babytees").addEventListener("reset", cancelOrder);

//this function also has an "event" property that prevents the browser from automatically reloading
//the page by default when the function executes

function submitForm(event) {
  event.preventDefault();

  //these are variables that pull the values from the first and last name and email fields after the user has entered them
  //VARIABLE
  var customerName = document.getElementById("custname").value;
  var customerLastName = document.getElementById("custlastname").value;

  var customerEmail = document.getElementById("custemail").value;
  //this variable sets the order total at 0 until the user enters selections to change values.
  var orderTotal = 0;

  //this is a function callback that has a boolean value stored inside it that was sent from the custInfoFunction function below.
  var userInput = custInfoFunction();

  //this teeSelectionFuncation call will run only if the userInput value is true (meaning if the user has entered their first and last name
  //and email address as instructed). It adds up the total amount value from number of items selected using the check boxes and the associated combo boxes and puts it in
  //const SELECTEDITEMS which is returned and is stored here in var orderTotal. Then, once the orderTotal amount is greater than 0,
  //the giftWrapSelectionFunction is also called, and then the giftwrapAmountFunction is called. Finally, once everything has a value, the receiptInfo function is
  //called and prints to the screen on the webpage.
  if (userInput == true) {
    orderTotal = teeSelectionFunction();

    //this function calls back user input information from the Gift Wrapping option radio buttons, indicating if they want gift
    //wrapping or not. That information is returned from var giftWrap and stored here in var giftSelect.
    if (orderTotal > 0) {
      var giftSelect = giftwrapSelectionFunction();
      var giftAmountSelected = giftwrapAmountFunction();
      receiptInfo(
        customerName,
        customerLastName,
        customerEmail,
        orderTotal,
        giftSelect,
        giftAmountSelected
      );
    }
  }
}

//this function gathers the user information of name and email address and returns it to be used in the submitForm function.
//It ensures that appropriate content has been entered. It pulls from the HTML id value information.
//FUNCTION WITHOUT ARGUMENT
function custInfoFunction() {
  //LET
  let custName = document.getElementById("custname");
  let custLastName = document.getElementById("custlastname");

  let custEmail = document.getElementById("custemail");
  //BOOLEAN
  var infoEntered = false;

  if (custName.value == "") {
    alert("Please enter your first name, thank you!");
    custName.focus();
  } else if (custName.value == " ") {
    alert("Please enter your first name, thank you!");
    custName.focus();
  } else if (custLastName.value == "") {
    alert("Please enter your last name, thank you!");
    custLastName.focus();
  } else if (custLastName.value == " ") {
    alert("Please enter your last name, thank you!");
    custEmail.focus();
  } else if (custEmail.value == "") {
    alert("Please enter your email address, thank you!");
    custEmail.focus();
  } else if (custEmail.value == " ") {
    alert("Please enter your email address, thank you!");
    custEmail.focus();
  } else {
    infoEntered = true;
  }
  return infoEntered;
}

//this function gathers the users input of onesie selections and returns it to be used in the submitForm function.
// It pulls from the HTML id value information and enables me to assign an amount to each item based on whether or
//not the box is checked. If the box is checked, it is assigned a variable with a price number value. If it is not
//checked, it is assigned a variable with the amount of 0.
function teeSelectionFunction() {
  //IF AND ELSE
  if (document.getElementById("newborncheck").checked) {
    var newBorn = 5;
  } else {
    var newBorn = 0;
  }
  if (document.getElementById("3to6monthscheck").checked) {
    var threeToSixMonths = 10;
  } else {
    var threeToSixMonths = 0;
  }
  if (document.getElementById("6to9monthscheck").checked) {
    var sixToNineMonths = 15;
  } else {
    var sixToNineMonths = 0;
  }

  //using this as a constant because this math formula will never change.
  //CONST
  const SELECTEDITEMS =
    //ARITHMETIC OPERATOR
    newBorn * document.getElementById("qnewborn").value +
    threeToSixMonths * document.getElementById("q36months").value +
    sixToNineMonths * document.getElementById("q69months").value;
  if (SELECTEDITEMS == 0) {
    alert("Please select a Baby Tee");
  }
  return SELECTEDITEMS;
}

//this function gathers the users input of giftwrap selections and returns it to be used in the submitForm function.
//It pulls from the HTML id value information and enables me to assign a variable based on which radio button was selected.
function giftwrapSelectionFunction() {
  if (document.getElementById("giftwrapradio").checked) {
    var giftWrap = "gift wrapping ";
  } else if (document.getElementById("nogiftwrapradio").checked) {
    var giftWrap = "(no gift wrap needed) ";
  }

  return giftWrap;
}
//this function determines if the giftwrap radio button is selected and assigns it a value based on the input. That input is passed back to the submitForm
//function for use in the receiptInfo function.
function giftwrapAmountFunction() {
  if (document.getElementById("giftwrapradio").checked) {
    var giftAmount = 10;
  } else {
    var giftAmount = 0;
  }

  return giftAmount;
}

// this function holds 6 arguements that will pass back to the function call in the submitForm function that will only print
//the sentence to the screen if the user has entered in all the required fields and includes any information relevant
// to their selections as well as their order total and user information.
//FUNCTION WITH ARGUEMENT
function receiptInfo(
  customerName,
  customerLastName,
  customerEmail,
  orderTotal,
  giftSelect,
  giftAmountSelected
) {
  var allTotal = orderTotal + giftAmountSelected;
  //STRING METHOD - this concatinates the first and last names into one variable.
  var fullName = customerName.concat(" ", customerLastName);

  if (orderTotal > 0) {
    document.querySelector(".thanks").innerHTML =
      "Thank you " +
      fullName +
      " for placing your order with Santa Monica Designs. <br><br> Your order is as follows: <br> $" +
      orderTotal +
      " total merchandise <br><br> $" +
      giftAmountSelected +
      " " +
      giftSelect +
      " <br><br>The total amount charged to your payment method is $" +
      allTotal +
      ". <br><br> A detailed receipt and shipping information will be sent to " +
      customerEmail +
      " as well as any other necessary updates. <br><br> Please know, we appreciate your business and look forward to serving you in the future!";
  }
}

function cancelOrder() {
  document.querySelector(".thanks").innerHTML =
    "Your order has been cancelled.";
}
