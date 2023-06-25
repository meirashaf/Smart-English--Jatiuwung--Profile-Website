//EDU STAGE/LEVEL FUNCTION
// Map edu choices
var optEdu = {
   'no': ['-'],
   'elementary': ['Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6'],
   'junior': ['Grade 1', 'Grade 2', 'Grade 3'],
   'senior': ['Grade 1', 'Grade 2', 'Grade 3'],
   'college': ['Associate', 'Bachelor', 'Master', 'Doctorate'],
   'other': ['-'],
};

// When an option is changed, search the above for matching choices
$('#eduStages').on('change', function() {
   // Set selected option as variable
   var selectValue = $(this).val();

   // Empty the target field
   $('#eduGrades').empty();
   
   // For each choice in educational grade/level
   for (i = 0; i < optEdu[selectValue].length; i++) {
      // Output choice in the target field
      $('#eduGrades').append("<option value='" + optEdu[selectValue][i] + "'>" + optEdu[selectValue][i] + "</option>");
   }
});


//PROVINCE AND CITY FUNCTION
// Map locations choices
var optCity = {
   'jakarta': ['Greater Jakarta', 'North Jakarta', 'South Jakarta', 'West Jakarta', 'North Jakarta'],
   'java': ['Bandung', 'Tasik', 'Sumedang', 'Subang', 'Purwakarta', 'Majalengka'],
   'sumatra': ['Asahan', 'Batu Bara', 'Binjai', 'Dairi', 'Medan'],
   'kalimantan': ['Pontianak', 'Palangka Raya', 'Banjar Baru', 'Samarinda', 'Tanjung Selor'],
   'sulawesi': ['Mamuju', 'Makassar', 'Kendari', 'Palu', 'Gorontalo', 'Manado'],
   'other': ['-'],
};

// When an option is changed, search the above for matching choices
$('#province').on('change', function() {
   // Set selected option as variable
   var provValue = $(this).val();

   // Empty the target field
   $('#city').empty();
   
   // For each choice in city
   for (i = 0; i < optCity[provValue].length; i++) {
      // Output choice in the target field
      $('#city').append("<option value='" + optCity[provValue][i] + "'>" + optCity[provValue][i] + "</option>");
   }
});

//PROGRAMS AND SCHEDULE FUNCTION
// Map schedule choices
var optSchedule = {
   'English Only': ['Monday and Wednesday, 09.00-10.30', 'Monday and Wednesday, 19.00-20.30'],
   'English and Mathematics': ['Tuesday and Thursday, 09.00-10.30', 'Monday and Thursday, 19.00-20.30'],
   'Cram School': ['Friday and Saturday, 09.00-10.30', 'Friday and Saturday, 19.00-20.30'],
   'TOEFL Preparation': ['Monday and Wednesday, 13.00-14.30', 'Monday and Wednesday, 17.30-19.00'],
   'TOEIC Preparation': ['Tuesday and Thursday, 13.00-14.30', 'Tuesday and Thursday, 17.30-19.00'],
   'IELTS Preparation': ['Friday and Saturday, 13.00-14.30', 'Friday and Saturday, 17.30-19.00'],
   'In-company Training': ['Monday and Wednesday, 14.30-16.00', 'Monday and Wednesday, 16.00-17.30'],
   'English Conversation Training': ['Tuesday and Thursday, 14.30-16.00', 'Tuesday and Thursday, 16.00-17.30'],
   'Private Class': ['Friday and Saturday, 14.30-16.00', 'Friday and Saturday, 16.00-17.30'],
};

// When an option is changed, search the above for matching choices
$('#program').on('change', function() {
   // Set selected option as variable
   var scheduleValue = $(this).val();

   // Empty the target field
   $('#schedule').empty();
   
   // For each choice in city
   for (i = 0; i < optSchedule[scheduleValue].length; i++) {
      // Output choice in the target field
      $('#schedule').append("<option value='" + optSchedule[scheduleValue][i] + "'>" + optSchedule[scheduleValue][i] + "</option>");
   }
});