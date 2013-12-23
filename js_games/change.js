$(document).ready(function() {
	// Change 

	$('#print-change').click(function() {
		var numCents = parseFloat( $('#cents').val() );
		var total = numCents / 100;
		var totalAsString = total.toString();
		var dollarString = totalAsString.split('.');
		var dollars = dollarString[0]; // number of dollars
		var cents = parseInt(dollarString[1]);
		if (dollars >= 1) {
			if (dollars == 1) {
				$('#output').append(dollars + " dollar <br>");
			} else if (dollars > 1) {
			$('#output').append(dollars + " dollars <br>");
			}
		}
		var quarters = parseInt(cents / 25); // how many quarters in cents
		if (quarters >= 1) {
			if (quarters === 1) {
				$('#output').append(quarters + " quarter <br>");
			} else if (quarters > 1) {
						$('#output').append(quarters + " quarters <br>");
					}	
		}
		var newTotal1 = parseFloat(cents) - (quarters * 25); // remaining cents after removing quarters
		var dimes = parseInt(newTotal1 / 10); // how many dimes in cents
		if (dimes >= 1) {
			if (dimes === 1) {
				$('#output').append(dimes + " dime <br>");
			} else if (dimes > 1) {
				$('#output').append(dimes + " dimes <br>");
			}
		}
		var newTotal2 = newTotal1 - (dimes * 10); // remaining cents after removing dimes
		var nickels = parseInt(newTotal2 / 5); // how many nickels in cents
		if (nickels >= 1) {
			if (nickels === 1) {
				$('#output').append(nickels + " nickel<br>");
			} else if (nickels > 1) {
			$('#output').append(nickels + " nickels <br>");
			}
		}
		var pennies = newTotal2 - (nickels * 5); //number of pennies
		if (pennies >= 1) {
			if (pennies === 1) {
				$('#output').append(pennies + " penny<br>")
			} else if (pennies > 1) {
			$('#output').append(pennies + " pennies <br>");
			}
		}

	});
	
});