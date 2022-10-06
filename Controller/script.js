async function getListItem(){
    try {
       await fetch('https://jsonplaceholder.typicode.com/photos')
         .then(res => res.json())
         .then (json => {
            console.log(json)
            const todoTemplate = document.getElementById('todoTemplate')
            const todoElement = 
            todoTemplate.content.firstElementChild.cloneNode(true)
            const titleElement = todoElement.querySelector('.heading-blog-text')
            titleElement.textContent = json.title
            const container = document.getElementById('container')
            container.appendChild(titleElement)
         })
         return todoElement       
    
        } catch (error) {
            console.log('error');
        }
}
getListItem()


/* function renderTodoList(json, container){
    const ulElement = document.getElementById(container)
    for (const todo of json) {
        const liElement = createTagElement(todo)
        ulElement.appendChild(liElement)
    }
}

//main
(() => {
    const todoList = getTodoList()
    renderTodoList(todoList, 'todoList')
})() */