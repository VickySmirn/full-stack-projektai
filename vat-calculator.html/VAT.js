let myButton = document.getElementById('btnTax');
myButton.onclick = taxCalculator;

function taxCalculator() {
let subTotal = document.getElementById('Subtotal').value;
let taxRate = document.getElementById('taxRate').value;

let salesRate = (subTotal * taxRate)/100;
let total = parseFloat(subTotal) + parseFloat(salesRate);
  document.getElementById("salesRate").value = salesRate;
  document.getElementById("total").value = total;
}