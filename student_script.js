
    document.addEventListener("DOMContentLoaded", function () {
        console.log('PHP elective1Limit:', phpElective1Limit);
        console.log('PHP elective2Limit:', phpElective2Limit);
        var elective1Limit = phpElective1Limit;
        var elective2Limit = phpElective2Limit;
        console.log('elective1Limit:', elective1Limit);
        console.log('elective2Limit:', elective2Limit);
        var elective1Option1Count = 0;
        var elective1Option2Count = 0;
        var elective2Option1Count = 0;
        var elective2Option2Count = 0;

        // Attach click event listeners to the radio buttons
        document.querySelectorAll('input[name="elective1"]').forEach(function (radio) {
            radio.addEventListener('click', function () {
                handleOptionClick('elective1', this.value);
            });
        });

        document.querySelectorAll('input[name="elective2"]').forEach(function (radio) {
            radio.addEventListener('click', function () {
                handleOptionClick('elective2', this.value);
            });
        });

        function handleOptionClick(elective, option) {
            console.log('elective1Limit:', elective1Limit);
            console.log('elective2Limit:', elective1Limit);
            // Increment the respective count based on the clicked option
            if (elective === 'elective1') {
                if (option === 'Option 1' && elective1Option1Count < elective1Limit) {
                    elective1Option1Count++;
                } else if (option === 'Option 2' && elective1Option2Count < elective1Limit) {
                    elective1Option2Count++;
                }
            } else if (elective === 'elective2') {
                if (option === 'Option 1' && elective2Option1Count < elective2Limit) {
                    elective2Option1Count++;
                } else if (option === 'Option 2' && elective2Option2Count < elective2Limit) {
                    elective2Option2Count++;
                }
            }

            // Check if the limits are reached and disable options accordingly
            checkLimits();
        }

        function checkLimits() {
            if (elective1Option1Count >= elective1Limit) {
                disableOption('elective1', 'Option 1');
            }

            if (elective1Option2Count >= elective1Limit) {
                disableOption('elective1', 'Option 2');
            }

            if (elective2Option1Count >= elective2Limit) {
                disableOption('elective2', 'Option 1');
            }

            if (elective2Option2Count >= elective2Limit) {
                disableOption('elective2', 'Option 2');
            }
        }

        function disableOption(elective, option) {
            // Disable the specified option
            document.querySelector(`input[name="${elective}"][value="${option}"]`).disabled = true;
        }
    });