const questions = [
  {
    id: 1,
    question: "What Is Your Name?",
    option1: "Yatin Sharma",
    option2: "Neha Sharma",
    option3: "Yash",
    option4: "Himanshu",
    desc: `Yatin Sharma`
  },
  {
    id: 2,
    question: "What Is Your Score?",
    option1: "A++",
    option2: "B+",
    option3: "D+",
    option4: "C",
    desc: `A++ `
  },
  {
    id: 3,
    question: "What Is Your Gender?",
    option1: "Male",
    option2: "Female",
    option3: "Both",
    option4: "None Of The Above",
    desc: `Male `
  },
  {
    id: 4,
    question: "What Is Your Hobby?",
    option1: "Cricket",
    option2: "Coding",
    option3: "Swimming",
    option4: "Music",
    desc: `Coding `
  },
  {
    id: 5,
    question: "What Is Your color?",
    option1: "White",
    option2: "Black",
    option3: "Green",
    option4: "None",
    desc: `None `
  },
  {
    id: 6,
    question: "What Is Your School Name?",
    option1: "Teen Wala",
    option2: "SMPS",
    option3: "DAV",
    option4: "KV",
    desc: `Teen Wala `
  },
 
];

const sectionCenter = document.querySelector(".section-center");
function displayMenuItems(questions) {
  let html = ``;
  questions.forEach((item) => {
    html += `
      <div class="question">
        <div class="question__title">
          <h1 >${item.question}</h1>
        </div>
        <div class="list">

        <ol class="question__options">
          <li class="option1"> ${item.option1}</li>
          <li class="option2"> ${item.option2}</li>
          <li class="option3"> ${item.option3}</li>
          <li class="option4"> ${item.option4}</li>
        </ol>
        </div>
        <div class="jawaab">
        <button class="answer-button">Show Answer</button>
        <div class="answer" style="display: none;">${item.desc}</div>
      </div>
      </div>
    `;
  });

  sectionCenter.innerHTML = html;
}

displayMenuItems(questions);

const answers = document.querySelectorAll(".answer-button");
answers.forEach((answer) => {
  answer.addEventListener("click", (event) => {
    const button = event.target;
    const answerElement = button.parentElement.querySelector(".answer");

    if (answerElement.style.display === "none") {
      answerElement.style.display = "block";
      button.textContent = "Hide Answer";
    } else {
      answerElement.style.display = "none";
      button.textContent = "Show Answer";
    }
  });
});
