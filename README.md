# mvc
Fast learning for MVC

Managing project's files in a web programming is very nerve-racking,
if you have already completed a big project with a lot of request, Certainly understand about that process of managing them are confused...
MVC is a fast solution for give a clear managing for requested.
MVC is simple, But requires a lot of practice.

In this small course we start about thinking MVC. tracking is fast, but you need to understand every duty before and know about every file task in following.

for start we need explain some word that many use in mvc programming,

1. MVC = Model View Controller
2. Model = is the data layer, every information for present in future, prepare in this layer, data provide from database or from any other source.
3. View = is the presentation layer, view give its data from model layer through the mediation of controller layer, 
view is not a template. template has a separate definition, when model send data to a view, 
view passing data to template. in other word, model has not any knowledge about how data will be use, 
model only provide data in raw format, 
raw data send from model to controller for process and view give information (processed data) for send those to template. 
however template is a part of view, but it isn't all of that.
4. Template = is a html file or any output format of files for present final information, in a simple word, template only use of present commands, like echo or print in php, or use of parsers print commands, like {{...}} in blade engine.
template dont have any calculate. a view may call multiple template or subview for present information in a request. like for present index page may load: header , body, right menu and footer.
5. Controller = is an interface between model and view layer
6. Router = is a determiner for how handle url request or any type of request and pass appropriate command to a controller.
7. autoload = this is not part of mvc, but we use of php spl_autoload_register function for don't include classes in any file that use.

You can change this learning project and share your exprience with this repository ;)

Let's go, only clone mvc to your localhost...