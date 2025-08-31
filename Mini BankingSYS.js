class Account {
    constructor(owner, balance, ...transactions) {
        this.user = owner;
        this._money = balance;
        this.transaction_arr = transactions;
    }
    deposit(amount) {
        if (amount > 0) {
            this._money += amount;
            console.log(`You just Deposited ${amount} $ into Your Account.`);
            this.transaction_arr.push(amount);
            return amount;
        } else {
            console.log("Invalid Input as Negative Number in Deposit section");
        }
    }
    withdraw(amount) {
        if (amount < 0) {
            console.log("Don't try to make a sneaky Deposit Bro☠️☠️");
        }
        if (amount <= this.balance && amount > 0) {
            this._money -= amount;
            console.log(`You withdrew ${amount} $ from your Account.`);
            this.transaction_arr.push(-amount);
            return amount;
        } else {
            console.log("Your WITHDRAWL amount is Less than '0' OR Higher than the BALANCE in your CURRENT Bank Account")
        }

    }
    get balance() {
        return this._money; //Just returns the BALANCE
    }
    get transactions() {
        console.log("These are all Transactions that happened right before Now: ");

        for (let trans_num of this.transaction_arr) {

            if (trans_num < 0) {

                console.log(`Cash Deducted : $ ` + trans_num);

            } else {
                console.log(`Cash Added: +$ ` + trans_num);
            }

        }
        console.log("Transaction Short History: ");
        console.log(this.transaction_arr);
    }
    set balance(money) {
        if (money > 0) {
            this._money = money;
            return this._money;  //RETURNS the SET Balance
        } else {
            console.log("Money Cann't be NEGATIVE breh!");
        }

    }
    static compareBalance(acc1, acc2) {
        if (acc1.balance < acc2.balance) {
            console.log(acc2.user + " Has the Higher Bank Balance of " + acc2.balance);
        } else {
            console.log(acc1.user + " has Higher Bank Balance of " + acc1.balance);
        }
    }

}
class SavingsAccount extends Account {                         //Interest and DEEP Banking knowledge is not inside 
//                                                                   my brain because i never prioritised Banking Stuff
    constructor(owner, balance, interestRate, ...interest) {
        super(owner, balance);
        this.interestR = interestRate;
        this.interest = interest;
    }
    addInterest() {
        console.log(" You got Interest of : $ " + this.balance * this.interestR / 100);
        return this.balance * this.interestR / 100;
    }
}
let Acc1 = new Account("Arjit", 10000000, 10000000);
let Acc2 = new Account("Goku", 100000000, 100000000);
Account.compareBalance(Acc1, Acc2);
//The LOOP MAKES EVERYTHING WORKING in SHORT 🤑🤑😎😎😎
let bank_execution = true;
while (bank_execution) {
    console.log(`List of methods to Use:USE THE NUMBERS TO SWITCH Between them:
            1->Deposit.
            2->Withdraw.
            3->Get Details about your account.
            4->Get Transaction History
            5->Set Balance Yourself.
            6->Exit The Application`);
    bank_methods = prompt("Enter the Method you want to use : ");
    bank_methods = parseInt(bank_methods);
    switch (bank_methods) {
        case 1:
            let user_deposit = prompt("Enter the Amount you want to Deposit: ");
            user_deposit = parseInt(user_deposit);
            Acc1.deposit(user_deposit);
            break
        case 2:
            let user_withdraw = prompt("Enter the Amount you want to WITHDRAW from your Account:");
            user_withdraw = parseInt(user_withdraw);
            Acc1.withdraw(user_withdraw);
            break
        case 3:
            console.log("Current Account Balance: " + Acc1.balance);
            break
        case 4:
            Acc1.transactions;
            break
        case 5:
            let user_setbalance = prompt("Set Your account Balance Customized: ");
            user_setbalance = parseInt(user_setbalance);
            Acc1.balance = user_setbalance;
            break
        case 6:
            console.log("Thanks for using My Application ! ");
            bank_execution = false;
    }
}
//OUTPUT of "Account.compare" part in browser: 
// Goku Has the Higher Bank Balance of 100000000 <-Again Updated Part.
let saves = new SavingsAccount(Acc1.user, Acc1.balance, 45, 45, 32, 32, 21, 1);
console.log(saves);
saves.addInterest();
//OUTPUT of this "saves" part in browser:
// let saves = new SavingsAccount(Acc1.user, Acc1.balance, 45, 45, 32, 32, 21, 1);
// VM931:22 Your current Account Balance is: $ 9949992
// VM1109:2 SavingsAccount {user: 'Arjit', _money: 9949992, transaction_arr: Array(0), interestR: 45, interest: Array(5)}
// VM931:22 Your current Account Balance is: $ 9949992
// VM931:65  You got Interest of : $ 4477496.4
// VM931:22 Your current Account Balance is: $ 9949992
// 4477496.4

// console.log(Acc1.balance);
// Acc1.transactions;
// console.log(Acc1.withdraw(5000));
// console.log(Acc1.withdraw(3000));
// console.log(Acc1.deposit(40000));
// console.log(Acc1.withdraw(2000));
// console.log(Acc1.deposit(4000));
// console.log(Acc1.withdraw(6000));
// console.log(Acc1.deposit(45000));
// Acc1.transactions;
// Acc1.balance = 800000000000; //used SETTER.