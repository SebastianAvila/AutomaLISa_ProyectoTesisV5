// creating an array and passing the number, questions, options, and answers
let questions = [
  {
    numb: 1,
    question: "¿Qué es un autómata finito?",
    answer: "Un modelo matemático que acepta o rechaza cadenas de cierto lenguaje definido sobre un alfabeto",
    options: [
      "Un diagrama de flujo que sirve para representar un algoritmo o programa computacional",
      "Un codigo programado de estados finitos que posee una cinta de salida y un control",
      "Un modelo matemático que acepta o rechaza cadenas de cierto lenguaje definido sobre un alfabeto", //
      "Una máquina real diseñada para aceptar una sola palabra"
    ]
  },
  {
    numb: 2,
    question: "¿Qué representa un autómata finito?",
    answer: "Un lenguaje formado por un conjunto de cadenas o palabras",
    options: [
      "Un alfabeto formado por un conjunto de símbolos",
      "Un algoritmo para aceptar y rechazar símbolos de un alfabeto",
      "Un lenguaje formado por un conjunto de cadenas o palabras",//
      "Un conjunto de lenguajes formados a partir de un alfabeto"
    ]
  },
  {
    numb:3 ,
    question:"En la definición formal del autómata M (K={q0,q1}, Σ={0,1}, s=q0, F=q1, δ={(q0,0,q1), (q1,1,q0)}) ¿Qué simboliza la letra ‘K’?",
    answer: "Conjunto de los estados del autómata",
    options: [
      "Conjunto de los estados del autómata",//
      "Estado inicial",
      "Alfabeto de entrada",
      "Subconjunto de K x Σ* x K"
    ]
  },
  {
    numb: 4,
    question: "En la definición formal del autómata M (K={q0,q1}, Σ={0,1}, s=q0, F=q1, δ={(q0,0,q1), (q1,1,q0)}) ¿Qué simboliza la letra ‘s’?",
    answer: "Estado inicial",
    options: [
      "Estado inicial", //
      "Conjunto de estados del autómata",
      "Alfabeto de entrada",
      "Subconjunto finito de K x Σ* x K"
    ]
  },
  {
    numb: 5,
    question: "En la definición formal del autómata M (K={q0,q1}, Σ={0,1}, s=q0, F=q1, δ={(q0,0,q1), (q1,1,q0)}) ¿Qué simboliza la letra ‘F’",
    answer: "Conjunto de estados finales",
    options: [
      "Conjunto de estados del autómata",
      "Alfabeto de entrada",
      "Conjunto de estados finales", //
      "Subconjunto finito de K x Σ* x K"
    ]
  },
  {
    numb:6 ,
    question: "En la definición formal del autómata M (K={q0,q1}, Σ={0,1}, s=q0, F=q1, δ={(q0,0,q1), (q1,1,q0)}). ¿Qué simboliza la letra ‘Σ’?",
    answer: "Alfabeto de entrada",
    options: [
      "Conjunto de los estados finales",
      "Conjuntos de los estados de un autómata",
      "Subconjunto finito de K x Σ* x K",
      "Alfabeto de entrada" //
    ]
  },
  {
    numb: 7,
    question: "En la definición formal del autómata M (K={q0,q1}, Σ={0,1}, s=q0, F=q1, δ={(q0,0,q1), (q1,1,q0)}). ¿Qué simboliza la letra ‘δ’?",
    answer: "Es un subconjunto finito de K x Σ* x K",
    options: [
      "Conjunto de los estados finales",
      "Es un subconjunto finito de K x Σ* x K", //
      "Alfabeto de entrada",
      "Conjuntos de los estados de un autómata"
    ]
  },
  {
    numb:8 ,
    question: "¿Cuál de las siguientes características distingue a un Autómata Finito Determinista?",
    answer: "Todo estado tiene exactamente una transición para cada símbolo del alfabeto.",
    options: [
      "Alguno de los estados tiene 0 o más de 1 transición para cada símbolo del alfabeto.",
      "Solo un estado tiene una transición para cada símbolo del alfabeto.",
      "Todo estado tiene exactamente una transición para cada símbolo del alfabeto.",//
      "Todo estado tiene exactamente una transición para algún símbolo del alfabeto."
    ]
  },
  {
    numb: 9,
    question: "¿Qué característica distingue a un Autómata Finito No Determinista?",
    answer: "Todo estado tiene exactamente 1 transición con cada símbolo del alfabeto y existe varios caminos para leer la misma palabra.",
    options: [
      "Algún estado puede tener 0 o más de 1 transición con cada símbolo del alfabeto  y existe varios caminos para leer la misma palabra.",
      "Todo estado tiene exactamente 1 transición con cada símbolo del alfabeto y existe varios caminos para leer la misma palabra.", //
      "Todo estado puede tener más de 1 transición para un solo símbolo del alfabeto y existe un único camino para leer a todas las palabras.",
      "Solo un estado puede tener más de 1 transición para cada símbolo del alfabeto y existe un único camino para leer a todas las palabras."
    ]
  },
  {
    numb: 10,
    question: "El automta finito determinista: ",
    answer: "No tiene vacíos y no puede estar en mas de aun estado a la vez",
    options: [
      "Peude estar en mas de un estado a la vez ",
      "Tiene vacios y no puede estar mas de una vez en un estado a la vez", //
      "No tiene vacíos y no puede estar en mas de aun estado a la vez",
      "Tiene Vacios"
    ]
  }
  // {
  //   numb: 11,
  //   question: "",
  //   answer: "",
  //   options: [
  //     "",
  //     "",
  //     "",
  //     ""
  //   ]
  // },
  // {
  //   numb: 12,
  //   question: "",
  //   answer: "",
  //   options: [
  //     "",
  //     "",
  //     "",
  //     ""
  //   ]
  // },{
  //   numb: 13,
  //   question: "",
  //   answer: "",
  //   options: [
  //     "",
  //     "",
  //     "",
  //     ""
  //   ]
  // },{
  //   numb: 14,
  //   question: "",
  //   answer: "",
  //   options: [
  //     "",
  //     "",
  //     "",
  //     ""
  //   ]
  // },{
  //   numb: 15,
  //   question: "",
  //   answer: "",
  //   options: [
  //     "",
  //     "",
  //     "",
  //     ""
  //   ]
  // },{
  //   numb: 16,
  //   question: "",
  //   answer: "",
  //   options: [
  //     "",
  //     "",
  //     "",
  //     ""
  //   ]
  // },
  // {
  //   numb: 17,
  //   question: "",
  //   answer: "",
  //   options: [
  //     "",
  //     "",
  //     "",
  //     ""
  //   ]
  // },
  // {
  //   numb: 18,
  //   question: "",
  //   answer: "",
  //   options: [
  //     "",
  //     "",
  //     "",
  //     ""
  //   ]
  // },
  // {
  //   numb: 19,
  //   question: "",
  //   answer: "",
  //   options: [
  //     "",
  //     "",
  //     "",
  //     ""
  //   ]
  // },
];