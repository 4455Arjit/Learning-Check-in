# Quiz game:
# -> quiz contains Questions.  quiz contains options for the questions
# -> we got score for the right Answers-(each right answer gives you +1 score)
question_bank = [
    "What is my Name?",
    "What is my Game?",
    "What is my style?",
    "Who is My Master?",
    "Who is my Enemy?",
]  # length = 5(0 to 4)
options = [
    ["A. ) AT", "B. )AQ", "C. )AW", "D. )AR"],
    ["A. ) AQ", "B. )AW", "C. )ME", "D. )AR"],
    ["A. ) AT", "B. )Fusion", "C. )TY", "D. )SD"],
    ["A. ) RT", "B. )GH", "C. )GTA", "D. )DB"],
    ["A. ) S", "B. )R", "C. )Me(Myself)", "D. )JK"],
]  # Length = 5 (0 to 4)

answers = ["A", "C", "B", "D", "C"]

user_guesses = []

score = 0

for a_question in range(len(question_bank)):
    print(question_bank[a_question])

    for a_row in range(len(options[a_question])):

        print(options[a_question][a_row])

    ask_ans = input("Enter the Correct Option(A,B,C,D ?): ").capitalize()

    user_guesses.append(ask_ans)
    if ask_ans == answers[a_question]:
        print("Correct!")
        score += 1
    else:
        print("Wrong")
        print(f"The correct answer was {answers[a_question]}")
print(f"You got {score} out of 5 questions RIGHT!!.")
if score > 2:
    print("Yeah! Comeon boy..be resilient!")
else:
    print("You are PHUCKED already!!🗿🤣")
