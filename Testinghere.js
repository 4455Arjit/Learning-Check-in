class Acc{
    constructor(user,money,...transaction){
        this.person=user;
        this.cash=money;
        this.transaction_history=transaction;
    }
    get_details(){
        console.log("User Name is : "+this.person);
        console.log("Current balance is :"+this.cash);
        console.log("Transaction History is as follows: "+this.transaction_history);
        console.log(this.transaction_history.length);
        return this.person, this.cash ,this.transaction_history;
    }
    get_transaction_history(){
            // for(let his_start=0;his_start<=this.transaction_history.length;his_start++){
            //     console.log(this.transaction_history);
            // }
            for(let transactions in this.transaction_history){
            //    console.log(this.transaction_history[transactions]);
               if(this.transaction_history[transactions]<0){
                console.log(`The amount of ${this.transaction_history[transactions]} $ is deducted from account.`)
               }else{
                console.log(`The $ ${this.transaction_history[transactions]} are added to the account`)
               }
            }
        }
    }
let Person_1= new Acc("Itachi",900000,-9900,9009,-4434,332);
Person_1.get_details();
Person_1.get_transaction_history();