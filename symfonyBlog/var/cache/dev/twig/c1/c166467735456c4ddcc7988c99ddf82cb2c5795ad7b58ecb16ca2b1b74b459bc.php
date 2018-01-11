<?php

/* blog/AddPost.html.twig */
class __TwigTemplate_dc4871404ff2239f404f3e16d4260d907b2e8a1fedbfcf70f67a1b9fffc6453b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/AddPost.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_587a36437cdaece18a897a2bd0242bb1eb869c0eaa4a4a8fb573087960f2acb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587a36437cdaece18a897a2bd0242bb1eb869c0eaa4a4a8fb573087960f2acb6->enter($__internal_587a36437cdaece18a897a2bd0242bb1eb869c0eaa4a4a8fb573087960f2acb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/AddPost.html.twig"));

        $__internal_5620f4aad2d02142269e440dc7e191a3e86e86b34270048a6ecd857f3076d9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5620f4aad2d02142269e440dc7e191a3e86e86b34270048a6ecd857f3076d9f0->enter($__internal_5620f4aad2d02142269e440dc7e191a3e86e86b34270048a6ecd857f3076d9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/AddPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_587a36437cdaece18a897a2bd0242bb1eb869c0eaa4a4a8fb573087960f2acb6->leave($__internal_587a36437cdaece18a897a2bd0242bb1eb869c0eaa4a4a8fb573087960f2acb6_prof);

        
        $__internal_5620f4aad2d02142269e440dc7e191a3e86e86b34270048a6ecd857f3076d9f0->leave($__internal_5620f4aad2d02142269e440dc7e191a3e86e86b34270048a6ecd857f3076d9f0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_96753bb16e37d60c8729cc2254444894545b4cf4c8963a1c6d1baed24c577902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96753bb16e37d60c8729cc2254444894545b4cf4c8963a1c6d1baed24c577902->enter($__internal_96753bb16e37d60c8729cc2254444894545b4cf4c8963a1c6d1baed24c577902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c4234b19eff08d1ae6e0ff64e9ef8880ec39eb8d730a293e62e9a437620a4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4234b19eff08d1ae6e0ff64e9ef8880ec39eb8d730a293e62e9a437620a4fb->enter($__internal_3c4234b19eff08d1ae6e0ff64e9ef8880ec39eb8d730a293e62e9a437620a4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "   Admin Panel
    ";
        
        $__internal_3c4234b19eff08d1ae6e0ff64e9ef8880ec39eb8d730a293e62e9a437620a4fb->leave($__internal_3c4234b19eff08d1ae6e0ff64e9ef8880ec39eb8d730a293e62e9a437620a4fb_prof);

        
        $__internal_96753bb16e37d60c8729cc2254444894545b4cf4c8963a1c6d1baed24c577902->leave($__internal_96753bb16e37d60c8729cc2254444894545b4cf4c8963a1c6d1baed24c577902_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6faf7e36a9ffb464fc05626ed19618071e4a91fddf749f60842e8c2219c98c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6faf7e36a9ffb464fc05626ed19618071e4a91fddf749f60842e8c2219c98c5c->enter($__internal_6faf7e36a9ffb464fc05626ed19618071e4a91fddf749f60842e8c2219c98c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e444db49700bb89a6bb40f090de38e6148a7513cb583700dc8f308ea89bfc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e444db49700bb89a6bb40f090de38e6148a7513cb583700dc8f308ea89bfc1e->enter($__internal_4e444db49700bb89a6bb40f090de38e6148a7513cb583700dc8f308ea89bfc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "<script>
  \$( function() {
    \$( \"#form_postDate\" ).datepicker();
  } );
  </script>
";
        
        $__internal_4e444db49700bb89a6bb40f090de38e6148a7513cb583700dc8f308ea89bfc1e->leave($__internal_4e444db49700bb89a6bb40f090de38e6148a7513cb583700dc8f308ea89bfc1e_prof);

        
        $__internal_6faf7e36a9ffb464fc05626ed19618071e4a91fddf749f60842e8c2219c98c5c->leave($__internal_6faf7e36a9ffb464fc05626ed19618071e4a91fddf749f60842e8c2219c98c5c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6caa405b214c628bbd074c73110f8ab7395496cd939552be50f80b6bea8eb26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6caa405b214c628bbd074c73110f8ab7395496cd939552be50f80b6bea8eb26c->enter($__internal_6caa405b214c628bbd074c73110f8ab7395496cd939552be50f80b6bea8eb26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffefccb3c72bbb45452eebb61b5136446c34476792b713ddd11157abfb4ff12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffefccb3c72bbb45452eebb61b5136446c34476792b713ddd11157abfb4ff12a->enter($__internal_ffefccb3c72bbb45452eebb61b5136446c34476792b713ddd11157abfb4ff12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <h1>Add New Post</h1>
         
        
        <div class=\"col-lg-12\">
           ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
              ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
               
                
                <br>
            
       
       
    ";
        
        $__internal_ffefccb3c72bbb45452eebb61b5136446c34476792b713ddd11157abfb4ff12a->leave($__internal_ffefccb3c72bbb45452eebb61b5136446c34476792b713ddd11157abfb4ff12a_prof);

        
        $__internal_6caa405b214c628bbd074c73110f8ab7395496cd939552be50f80b6bea8eb26c->leave($__internal_6caa405b214c628bbd074c73110f8ab7395496cd939552be50f80b6bea8eb26c_prof);

    }

    public function getTemplateName()
    {
        return "blog/AddPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  105 => 18,  101 => 17,  95 => 13,  86 => 12,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
   Admin Panel
    {% endblock %}
{% block javascripts %}
<script>
  \$( function() {
    \$( \"#form_postDate\" ).datepicker();
  } );
  </script>
{% endblock %}
{% block body  %}
    <h1>Add New Post</h1>
         
        
        <div class=\"col-lg-12\">
           {{ form_start(form) }}
              {{ form_widget(form) }}
                {{ form_end(form) }}
        </div>
               
                
                <br>
            
       
       
    {% endblock %}", "blog/AddPost.html.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\app\\Resources\\views\\blog\\AddPost.html.twig");
    }
}
