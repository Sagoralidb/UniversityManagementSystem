document.addEventListener("DOMContentLoaded", function () {
    const addCourseForm = document.getElementById("add-course-form");
    const courseList = document.querySelector(".course-list");
    const newCourseNameInput = document.getElementById("new-course-name");

    addCourseForm.addEventListener("submit", function (event) {
        event.preventDefault();
        const newCourseName = newCourseNameInput.value;
        if (newCourseName.trim() !== "") {
            const newCourse = document.createElement("li");
            newCourse.className = "course";
            newCourse.textContent = newCourseName;
            courseList.appendChild(newCourse);
            newCourseNameInput.value = "";
        }
    });
});
