<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dc61ba42d919bd275f6cae8989b4bbbea8a11484d692ec8d155936bde13805c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc61ba42d919bd275f6cae8989b4bbbea8a11484d692ec8d155936bde13805c->enter($__internal_2dc61ba42d919bd275f6cae8989b4bbbea8a11484d692ec8d155936bde13805c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_237a8b401a0a9d55e7af0681c6622873d3371af96dbb82335f4fc5948802fc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237a8b401a0a9d55e7af0681c6622873d3371af96dbb82335f4fc5948802fc29->enter($__internal_237a8b401a0a9d55e7af0681c6622873d3371af96dbb82335f4fc5948802fc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "

<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    

   
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">

 <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">

  
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
 <style>
        
         .navbar-nav li{
    font-weight: bold;
   font-family: Bitter,Georgia,Times,\"Times New Roman\",serif;
   font-size: 1.2em;
}
.Line{
    margin-top: -20px;
}
#Footer{
    
    padding:10px;
    border-top: 1px solid black;
    color:#eeeeee;
    background-color: #211f22;
    text-align: center;   
}
.blogpost{
\tbackground-color:#f5f5f5;
\tpadding-left: 10px;
\tpadding-right: 10px;
        padding-top: 10px;
\toverflow: hidden;
}
#heading{
    font-family: Bitter,Georgia,\"Times New Roman\",Times,serif;
    font-weight: bold;
     color: #005E90;
}
#heading:hover{
  color: #0090DB;
}
.description{
    color: #868686;
    font-weight:bold;
    margin-top:-2px;
}

.post{
     font-size: 1.1em;
      font-family: \"Lucida Sans Unicode\", \"Lucida Grande\", sans-serif;
      text-align: justify;
}
.btn-info{
    float: right;
}
.imageicon {
  max-width: 150px;
  margin: 0 auto;
  display: block;
}
.background{
    background-color:#F6F7F9;
}
      .FieldInfo{
    color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,\"Times New Roman\",Times,serif;
    font-size: 1.2em;
}
.CommentBlock{
background-color:#F6F7F9;
}
.Comment-info{
\tcolor: #365899;
\tfont-family: sans-serif;
\tfont-size: 1.1em;
\tfont-weight: bold;
\tpadding-top: 10px;
        
\t
}
.comment{
    margin-top:-2px;
    padding-bottom: 10px;
    font-size: 1.1em
}
        .background{background-color:aliceblue;}
         .img:hover {
    position:relative;
    top:-25px;
    left:-35px;
    width:500px;
    height:auto;
    display:block;
    z-index:999;
}
    </style>
  </head>

  <body>

    <nav class=\"navbar navbar-expand-md navbar-dark bg-dark \">
      <a class=\"navbar-brand\" href=\"#\">Blog</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"/symfonyBlog/web/app_dev.php/Blog\">Home </a>
          </li>
         
     
       
        </ul>
       
      </div>
    </nav>
      ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 138
            echo "           <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo " </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "       ";
        $this->displayBlock('body', $context, $blocks);
        // line 141
        echo "        
     ";
        // line 142
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "
  </body>
</html>
";
        
        $__internal_2dc61ba42d919bd275f6cae8989b4bbbea8a11484d692ec8d155936bde13805c->leave($__internal_2dc61ba42d919bd275f6cae8989b4bbbea8a11484d692ec8d155936bde13805c_prof);

        
        $__internal_237a8b401a0a9d55e7af0681c6622873d3371af96dbb82335f4fc5948802fc29->leave($__internal_237a8b401a0a9d55e7af0681c6622873d3371af96dbb82335f4fc5948802fc29_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d54da1a5b1da23d833359d45e0a8116a722aa1a895e13fad0adff040f0383e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d54da1a5b1da23d833359d45e0a8116a722aa1a895e13fad0adff040f0383e7->enter($__internal_5d54da1a5b1da23d833359d45e0a8116a722aa1a895e13fad0adff040f0383e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0acd846420762a6910cdb5a327529aa62d0cec31277c59f65a7773feae60603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0acd846420762a6910cdb5a327529aa62d0cec31277c59f65a7773feae60603->enter($__internal_d0acd846420762a6910cdb5a327529aa62d0cec31277c59f65a7773feae60603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d0acd846420762a6910cdb5a327529aa62d0cec31277c59f65a7773feae60603->leave($__internal_d0acd846420762a6910cdb5a327529aa62d0cec31277c59f65a7773feae60603_prof);

        
        $__internal_5d54da1a5b1da23d833359d45e0a8116a722aa1a895e13fad0adff040f0383e7->leave($__internal_5d54da1a5b1da23d833359d45e0a8116a722aa1a895e13fad0adff040f0383e7_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_075adb5c98ab3df153586c25ec1ae9e2edbee42bcea21c1e33b0833a4f6b41c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075adb5c98ab3df153586c25ec1ae9e2edbee42bcea21c1e33b0833a4f6b41c3->enter($__internal_075adb5c98ab3df153586c25ec1ae9e2edbee42bcea21c1e33b0833a4f6b41c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fa98292d02ac174617f8c471955f36b19c5049cb56a3419b8da6567de0194382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa98292d02ac174617f8c471955f36b19c5049cb56a3419b8da6567de0194382->enter($__internal_fa98292d02ac174617f8c471955f36b19c5049cb56a3419b8da6567de0194382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fa98292d02ac174617f8c471955f36b19c5049cb56a3419b8da6567de0194382->leave($__internal_fa98292d02ac174617f8c471955f36b19c5049cb56a3419b8da6567de0194382_prof);

        
        $__internal_075adb5c98ab3df153586c25ec1ae9e2edbee42bcea21c1e33b0833a4f6b41c3->leave($__internal_075adb5c98ab3df153586c25ec1ae9e2edbee42bcea21c1e33b0833a4f6b41c3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d04e949f6b8bcde2b82d3634baf2a469675d8f3a35f927d3eec226c6ebd53d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d04e949f6b8bcde2b82d3634baf2a469675d8f3a35f927d3eec226c6ebd53d7->enter($__internal_0d04e949f6b8bcde2b82d3634baf2a469675d8f3a35f927d3eec226c6ebd53d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84f999ce1be1148669aefe4f73c4a05afdcf975eab6ef9b384a7b38a363affab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f999ce1be1148669aefe4f73c4a05afdcf975eab6ef9b384a7b38a363affab->enter($__internal_84f999ce1be1148669aefe4f73c4a05afdcf975eab6ef9b384a7b38a363affab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_84f999ce1be1148669aefe4f73c4a05afdcf975eab6ef9b384a7b38a363affab->leave($__internal_84f999ce1be1148669aefe4f73c4a05afdcf975eab6ef9b384a7b38a363affab_prof);

        
        $__internal_0d04e949f6b8bcde2b82d3634baf2a469675d8f3a35f927d3eec226c6ebd53d7->leave($__internal_0d04e949f6b8bcde2b82d3634baf2a469675d8f3a35f927d3eec226c6ebd53d7_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e700f0c6f68c6893ce928036e2a16040167560ad6aeabbe2f021e0bd6aba9dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e700f0c6f68c6893ce928036e2a16040167560ad6aeabbe2f021e0bd6aba9dd8->enter($__internal_e700f0c6f68c6893ce928036e2a16040167560ad6aeabbe2f021e0bd6aba9dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bd2c342879e56c3dcce4ed3a2f9e591077161e85461df3daa8d1f94929e6bf7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2c342879e56c3dcce4ed3a2f9e591077161e85461df3daa8d1f94929e6bf7c->enter($__internal_bd2c342879e56c3dcce4ed3a2f9e591077161e85461df3daa8d1f94929e6bf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd2c342879e56c3dcce4ed3a2f9e591077161e85461df3daa8d1f94929e6bf7c->leave($__internal_bd2c342879e56c3dcce4ed3a2f9e591077161e85461df3daa8d1f94929e6bf7c_prof);

        
        $__internal_e700f0c6f68c6893ce928036e2a16040167560ad6aeabbe2f021e0bd6aba9dd8->leave($__internal_e700f0c6f68c6893ce928036e2a16040167560ad6aeabbe2f021e0bd6aba9dd8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 142,  245 => 140,  228 => 16,  210 => 11,  197 => 143,  195 => 142,  192 => 141,  189 => 140,  180 => 138,  176 => 137,  54 => 17,  52 => 16,  46 => 13,  41 => 11,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    

   
        <title>{% block title %}Welcome!{% endblock %}</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
{% block stylesheets %}{% endblock %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">

 <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">

  
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
 <style>
        
         .navbar-nav li{
    font-weight: bold;
   font-family: Bitter,Georgia,Times,\"Times New Roman\",serif;
   font-size: 1.2em;
}
.Line{
    margin-top: -20px;
}
#Footer{
    
    padding:10px;
    border-top: 1px solid black;
    color:#eeeeee;
    background-color: #211f22;
    text-align: center;   
}
.blogpost{
\tbackground-color:#f5f5f5;
\tpadding-left: 10px;
\tpadding-right: 10px;
        padding-top: 10px;
\toverflow: hidden;
}
#heading{
    font-family: Bitter,Georgia,\"Times New Roman\",Times,serif;
    font-weight: bold;
     color: #005E90;
}
#heading:hover{
  color: #0090DB;
}
.description{
    color: #868686;
    font-weight:bold;
    margin-top:-2px;
}

.post{
     font-size: 1.1em;
      font-family: \"Lucida Sans Unicode\", \"Lucida Grande\", sans-serif;
      text-align: justify;
}
.btn-info{
    float: right;
}
.imageicon {
  max-width: 150px;
  margin: 0 auto;
  display: block;
}
.background{
    background-color:#F6F7F9;
}
      .FieldInfo{
    color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,\"Times New Roman\",Times,serif;
    font-size: 1.2em;
}
.CommentBlock{
background-color:#F6F7F9;
}
.Comment-info{
\tcolor: #365899;
\tfont-family: sans-serif;
\tfont-size: 1.1em;
\tfont-weight: bold;
\tpadding-top: 10px;
        
\t
}
.comment{
    margin-top:-2px;
    padding-bottom: 10px;
    font-size: 1.1em
}
        .background{background-color:aliceblue;}
         .img:hover {
    position:relative;
    top:-25px;
    left:-35px;
    width:500px;
    height:auto;
    display:block;
    z-index:999;
}
    </style>
  </head>

  <body>

    <nav class=\"navbar navbar-expand-md navbar-dark bg-dark \">
      <a class=\"navbar-brand\" href=\"#\">Blog</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"/symfonyBlog/web/app_dev.php/Blog\">Home </a>
          </li>
         
     
       
        </ul>
       
      </div>
    </nav>
      {% for msg in app.session.flashbag.get('notice') %}
           <div class=\"alert alert-success\">{{msg}} </div>
      {% endfor %}
       {% block body %}{% endblock %}
        
     {% block javascripts %}{% endblock %}

  </body>
</html>
", "base.html.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\app\\Resources\\views\\base.html.twig");
    }
}
