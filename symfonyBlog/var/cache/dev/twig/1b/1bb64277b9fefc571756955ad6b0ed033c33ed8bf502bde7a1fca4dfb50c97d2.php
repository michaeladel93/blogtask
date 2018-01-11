<?php

/* blog/login.html.twig */
class __TwigTemplate_9df07225bf9886040ac3694127903b93374b05a7e7c8b9fbe2167f004a56b21f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56b8bbbc1be005cf7975a526e9fa6a8f6de368803ed6d72d13964774969c769a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b8bbbc1be005cf7975a526e9fa6a8f6de368803ed6d72d13964774969c769a->enter($__internal_56b8bbbc1be005cf7975a526e9fa6a8f6de368803ed6d72d13964774969c769a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/login.html.twig"));

        $__internal_adc4f4a0fe7a3c4554ffbec3796bf38b4da58bd2376d7340b304e80c2cb0056d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc4f4a0fe7a3c4554ffbec3796bf38b4da58bd2376d7340b304e80c2cb0056d->enter($__internal_adc4f4a0fe7a3c4554ffbec3796bf38b4da58bd2376d7340b304e80c2cb0056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b8bbbc1be005cf7975a526e9fa6a8f6de368803ed6d72d13964774969c769a->leave($__internal_56b8bbbc1be005cf7975a526e9fa6a8f6de368803ed6d72d13964774969c769a_prof);

        
        $__internal_adc4f4a0fe7a3c4554ffbec3796bf38b4da58bd2376d7340b304e80c2cb0056d->leave($__internal_adc4f4a0fe7a3c4554ffbec3796bf38b4da58bd2376d7340b304e80c2cb0056d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf34aeea98868b46e80eaf0a6c03b97a5e9cfe65771ac4517f8a8d1c4f17e38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf34aeea98868b46e80eaf0a6c03b97a5e9cfe65771ac4517f8a8d1c4f17e38c->enter($__internal_bf34aeea98868b46e80eaf0a6c03b97a5e9cfe65771ac4517f8a8d1c4f17e38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_805abc45d53dd91fcbe093f192e2b4afc588cbd1b6d4856f07000cea9623145a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805abc45d53dd91fcbe093f192e2b4afc588cbd1b6d4856f07000cea9623145a->enter($__internal_805abc45d53dd91fcbe093f192e2b4afc588cbd1b6d4856f07000cea9623145a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Login Page
    ";
        
        $__internal_805abc45d53dd91fcbe093f192e2b4afc588cbd1b6d4856f07000cea9623145a->leave($__internal_805abc45d53dd91fcbe093f192e2b4afc588cbd1b6d4856f07000cea9623145a_prof);

        
        $__internal_bf34aeea98868b46e80eaf0a6c03b97a5e9cfe65771ac4517f8a8d1c4f17e38c->leave($__internal_bf34aeea98868b46e80eaf0a6c03b97a5e9cfe65771ac4517f8a8d1c4f17e38c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bb9320662df01ee5ddeb282a4a33809d6971dc12875d0e52475ee0a53a13222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb9320662df01ee5ddeb282a4a33809d6971dc12875d0e52475ee0a53a13222->enter($__internal_1bb9320662df01ee5ddeb282a4a33809d6971dc12875d0e52475ee0a53a13222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdcc8949762c3bbe75330da38c3f364d2604b4c91eeb41153e680c1d9b689b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcc8949762c3bbe75330da38c3f364d2604b4c91eeb41153e680c1d9b689b3a->enter($__internal_fdcc8949762c3bbe75330da38c3f364d2604b4c91eeb41153e680c1d9b689b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
    <div class=\"row\">
     <div class=\" col-lg-4 col-lg-offset-6\">
    <h1>Welcome back</h1>
        
        <div>
        
            <form action=\"\" method=\"post\">
            <fieldset>
                <div class=\"form-group\">
                <label for=\"username\"><span class=\"FieldInfo\">User Name : </span></label>
                    <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user text-primary\"></span></span>
                    
                <input class=\"form-control\" type=\"text\" name=\"Username\" id=\"username\" placeholder=\"User name\"></div>
                    </div>
                  <div class=\"form-group\">
                <label for=\"Password\"><span class=\"FieldInfo\">Password : </span></label>
                       <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock text-primary\"></span></span>
                <input class=\"form-control\" type=\"Password\" name=\"Password\" id=\"Password\" placeholder=\"Password\">
                      </div></div>
                
                <input class=\"btn btn-info  btn-block\" type=\"submit\" name=\"Submit\" value=\"Login\">
                <br>
                </fieldset>
            </form>
        </div>
    </div>
        </div>
    </div>
    ";
        
        $__internal_fdcc8949762c3bbe75330da38c3f364d2604b4c91eeb41153e680c1d9b689b3a->leave($__internal_fdcc8949762c3bbe75330da38c3f364d2604b4c91eeb41153e680c1d9b689b3a_prof);

        
        $__internal_1bb9320662df01ee5ddeb282a4a33809d6971dc12875d0e52475ee0a53a13222->leave($__internal_1bb9320662df01ee5ddeb282a4a33809d6971dc12875d0e52475ee0a53a13222_prof);

    }

    public function getTemplateName()
    {
        return "blog/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title  %}
    Login Page
    {% endblock %}
{% block body  %}
    <div class=\"container\">
    <div class=\"row\">
     <div class=\" col-lg-4 col-lg-offset-6\">
    <h1>Welcome back</h1>
        
        <div>
        
            <form action=\"\" method=\"post\">
            <fieldset>
                <div class=\"form-group\">
                <label for=\"username\"><span class=\"FieldInfo\">User Name : </span></label>
                    <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user text-primary\"></span></span>
                    
                <input class=\"form-control\" type=\"text\" name=\"Username\" id=\"username\" placeholder=\"User name\"></div>
                    </div>
                  <div class=\"form-group\">
                <label for=\"Password\"><span class=\"FieldInfo\">Password : </span></label>
                       <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock text-primary\"></span></span>
                <input class=\"form-control\" type=\"Password\" name=\"Password\" id=\"Password\" placeholder=\"Password\">
                      </div></div>
                
                <input class=\"btn btn-info  btn-block\" type=\"submit\" name=\"Submit\" value=\"Login\">
                <br>
                </fieldset>
            </form>
        </div>
    </div>
        </div>
    </div>
    {% endblock %}{# empty Twig template #}
", "blog/login.html.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\app\\Resources\\views\\blog\\login.html.twig");
    }
}
