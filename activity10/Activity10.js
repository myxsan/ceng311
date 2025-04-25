const programmingLanguages = [
  "JavaScript",
  "Python",
  "Java",
  "C++",
  "C#",
  "Ruby",
  "Go",
  "Rust",
  "Swift",
  "Kotlin",
  "TypeScript",
  "PHP",
  "Scala",
  "Perl",
  "R",
  "Dart",
  "Haskell",
  "Elixir",
  "Lua",
  "MATLAB",
  "Objective-C",
  "Visual Basic .NET",
  "Assembly Language",
  "F#",
  "Julia",
  "COBOL",
  "Fortran",
  "Ada",
  "Scheme",
  "Prolog",
  "Smalltalk",
];

$(function () {
  $("#birthday").datepicker();
  $("#programming-languages").autocomplete({
    source: programmingLanguages,
  });
});
