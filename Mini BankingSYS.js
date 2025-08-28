class Account {
    constructor(owner, balance, ...transactions) {
        this.user = owner;
        this._money = balance;
        this.transaction_arr = transactions;
        //A loop is required in order to read
        //               the elements inside Transaction Array.
    }
    deposit(amount) {
        this._money += amount;
        console.log(`You just Deposited ${amount} $ into Your Account.`);

        return amount;
    }
    withdraw(amount) {

        this._money -= amount;
        console.log(`You withdrawed ${amount} $ from your Account.`);
        return amount;
    }
    get balance() {
        console.log("Your current Account Balance is: $ " + this._money);
        return this._money;
    }
    get transactions() {
        console.log("These are all Transactions that happened right before Now: ");
        for (let transaction_history in this.transaction_arr) {
                // console.log(this.transaction_arr[transaction_history]);
            if (this.transaction_arr[transaction_history] < 0) {
                this.withdraw(this.transaction_arr[transaction_history]);
                // console.log(`The amount of ${this.transaction_arr[transaction_history]} $ is deducted from account.`)
            } else {
                this.deposit(this.transaction_arr[transaction_history]);
                // console.log(`The $ ${this.transaction_arr[transaction_history]} are added to the account`)
            }

        }
        console.log("Transaction Short History: ");
        console.log();
    }
    set balance(money) {
        this._money = money;
        console.log(`Current Balance has been set to $ ` + this._money);
        return this._money;
    }
    //    static compareBalance(acc1,acc2){

    //     }

}
class SavingsAccount extends Account {
    constructor(owner, balance, interestRate, ...interest) {   //there was a "...interest " here : add that dude here
        super(owner, balance);
        this.interestR = interestRate;
        this.interest = interest;
    }
    addInterest() {
        console.log(" You got Interest of : $ " + this.balance * this.interestR / 100);
        return this.balance * this.interestR / 100;
    }
}
let Acc1 = new Account("Arjit", 10000000, -200, -203, 342, 234, -32, 34, -23, 42, -342);
console.log(Acc1.deposit(9000));
console.log(Acc1.balance);
console.log(Acc1.withdraw(9000));
console.log(Acc1.balance);
console.log(Acc1.withdraw(9000));
console.log(Acc1.balance);
Acc1.transactions;
let saves = new SavingsAccount(Acc1.user, Acc1.balance, 45, 45, 32, 32, 21, 1);
console.log(saves);
saves.addInterest();
Acc1.balance = 800000000000; //used SETTER.