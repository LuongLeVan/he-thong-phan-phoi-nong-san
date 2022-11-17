const blogApi = ' http://localhost:3000/Postes'

function start() {
    getBlogList(renderBlogList)

    handleCreateForm()


}

start()

// get danh sách blog trong api
function getBlogList(callback) {
    fetch(blogApi)
        .then(res => res.json())
        .then(callback)
}

function renderBlogList(blogList) {
    const blogLists = document.getElementById('blogList')
    const htmls = blogList.map((blog) => {
        return `
        <div class="col-md-12 d-flex ftco-animate block-content blog-item-${blog.id}">
        <div class="blog-entry align-self-stretch d-md-flex ">
           <a href="chitietbaiblog.html" class="hero-wrap hero-bread block-20" style="background-image: url('/images/image_4.jpg')">
                </a> 
          <div class="text d-block pl-md-4">

            <h3 class="heading "><a href="#" class="heading-blog-text" data-id="title">${blog.title}</a></h3>
  
            <p class="heading-content" data-id="content">${blog.content}</p>
             <p class="btn-parent"><a href="chitietbaiblog.html" class="btn btn-primary py-2 px-3">Read more</a></p>
             <button class="btn btn-danger btn-remove" onclick = "handleDeletePost(${blog.id})" >Remove</button>
             <button class="btn btn-success btn-edit"onclick = "handleUpdatedForm(${blog.id})" >Edit</button>
          </div>
        </div>
      </div>
        `
    })
    //thêm vào DOM
    blogLists.innerHTML = htmls.join('')
}


//Create new Post
function createPost(data, callback) {
    const options = {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json'
        }
    }
    fetch(blogApi, options)
        .then(res => res.json)
        .then(callback)

}
// xử lí việc handle
function handleCreateForm() {
    const btnCreate = document.querySelector('.btn-add')
    btnCreate.addEventListener('click', () => {
        const title = document.querySelector('.title').value
        const content = document.querySelector('.content').value

        const dataForm = {
            title: title,
            content: content
        }
        createPost(dataForm, getBlogList(renderBlogList))
    })
}
// xử lí việc handle delete
function handleDeletePost(id) {
    const options = {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        }
    }
    fetch(blogApi + '/' + id, options)
        .then(res => res.json)
        .then(() => {
            const blogItem = document.querySelector('blog-item-' + id)
            if (blogItem)
                blogItem.remove()
        })
}

const editBtn = document.querySelector("#edit")
editBtn.style.display=  'none'
function handleUpdatedForm(id) {
    // lấy data with id
/*     const button = document.querySelector('#create')
 */    fetch(blogApi + "/" + id)
        .then(res => res.json())
        .then(function (blog) {
            // đưa dữ liệu từ api vào form input
            const title = document.querySelector('.title')
            const content = document.querySelector('.content')
            title.value = `${blog.title}`
            content.value = `${blog.content}`
            title.focus()

            const editBtn = document.querySelector("#edit")
            if(editBtn){
                const btnCreate = document.querySelector('.btn-add')
                btnCreate.style.display = 'none'
                editBtn.style.display=  'block'

             }  

            editBtn.onclick = function () {
                fetch(blogApi + "/" + id, {
                    headers: {
                        "Content-Type": "application/json",
                    },
                    method: "PUT",
                    body: JSON.stringify({
                        title: title.value,
                        content: content.value,
                    }),
                }).then(() => {
                    getBlogList(renderBlogList)
                })
            }
        })
}