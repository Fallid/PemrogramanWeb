window.addEventListener("load", () => {
  const inputActivity = document.querySelector("#AddActivity");
  const buttonInput = document.querySelector("#addButton");
  const createTask = document.querySelector("#task");

  buttonInput.addEventListener("click", (e) => {
    e.preventDefault();
    const activity = inputActivity.value;
    inputActivity.value = "";
    if (!activity) {
      alert("Tidak ada activity");
      return;
    }

    const create_element = document.createElement("div");
    create_element.classList.add("task");

    const create_content = document.createElement("div");
    create_content.classList.add("contentTask");

    const create_text_activity = document.createElement("input");
    create_text_activity.type = "text";
    create_text_activity.classList.add("text");
    create_text_activity.value = activity;
    create_text_activity.setAttribute("readonly", "readonly");

    const task_content_action = document.createElement("div");
    task_content_action.classList.add("actions");

    const task_edit_button = document.createElement("button");
    task_edit_button.classList.add("edit");
    task_edit_button.innerHTML = "✓";

    const task_delete_button = document.createElement("button");
    task_delete_button.classList.add("delete");
    task_delete_button.innerHTML = "✕";

    task_content_action.appendChild(task_edit_button);
    task_content_action.appendChild(task_delete_button);

    create_element.appendChild(create_content);
    create_element.appendChild(task_content_action);
    create_content.appendChild(create_text_activity);
    createTask.appendChild(create_element);

    task_edit_button.addEventListener("click", () => {
      if (task_edit_button.innerText == "✓") {
        create_text_activity.removeAttribute("readonly");
        create_text_activity.focus();
        task_edit_button.innerText = "save";
      } else {
        create_text_activity.setAttribute("readonly", "readonly");
        task_edit_button.innerText = "✓";
      }
    });

    task_delete_button.addEventListener("click", () => {
      createTask.removeChild(create_element);
    });
  });
});
