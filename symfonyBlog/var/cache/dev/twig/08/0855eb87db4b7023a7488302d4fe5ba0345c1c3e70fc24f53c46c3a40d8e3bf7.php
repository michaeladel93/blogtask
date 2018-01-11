<?php

/* blog/home.html.twig */
class __TwigTemplate_6e8bf6dcab297fb0222339b57c198c88edfa9af09a5aed5e018f07d241cf251f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 1);
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
        $__internal_665637b7e1581c8371c255e32e4076505d5e299853f10cb35834b52f7e44cc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665637b7e1581c8371c255e32e4076505d5e299853f10cb35834b52f7e44cc9b->enter($__internal_665637b7e1581c8371c255e32e4076505d5e299853f10cb35834b52f7e44cc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_6dc91ccac2743021b2c60b1ffdd74f6430cdaf4a8315eaba31a14a04783b46da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc91ccac2743021b2c60b1ffdd74f6430cdaf4a8315eaba31a14a04783b46da->enter($__internal_6dc91ccac2743021b2c60b1ffdd74f6430cdaf4a8315eaba31a14a04783b46da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665637b7e1581c8371c255e32e4076505d5e299853f10cb35834b52f7e44cc9b->leave($__internal_665637b7e1581c8371c255e32e4076505d5e299853f10cb35834b52f7e44cc9b_prof);

        
        $__internal_6dc91ccac2743021b2c60b1ffdd74f6430cdaf4a8315eaba31a14a04783b46da->leave($__internal_6dc91ccac2743021b2c60b1ffdd74f6430cdaf4a8315eaba31a14a04783b46da_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6969b79493b4af3e3d7c3ff9c37d31dd1e7db9b680d12ea14a74415af4a0207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6969b79493b4af3e3d7c3ff9c37d31dd1e7db9b680d12ea14a74415af4a0207->enter($__internal_e6969b79493b4af3e3d7c3ff9c37d31dd1e7db9b680d12ea14a74415af4a0207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8b1b872403bde8dd035dce7bc95893de074d2edd460fa0591376ab549321bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b1b872403bde8dd035dce7bc95893de074d2edd460fa0591376ab549321bda->enter($__internal_f8b1b872403bde8dd035dce7bc95893de074d2edd460fa0591376ab549321bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    blog Page
    ";
        
        $__internal_f8b1b872403bde8dd035dce7bc95893de074d2edd460fa0591376ab549321bda->leave($__internal_f8b1b872403bde8dd035dce7bc95893de074d2edd460fa0591376ab549321bda_prof);

        
        $__internal_e6969b79493b4af3e3d7c3ff9c37d31dd1e7db9b680d12ea14a74415af4a0207->leave($__internal_e6969b79493b4af3e3d7c3ff9c37d31dd1e7db9b680d12ea14a74415af4a0207_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a259afe6f0330d27d3ad438447c5100f8b3d0db507777d4aad84f7f679c9a36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a259afe6f0330d27d3ad438447c5100f8b3d0db507777d4aad84f7f679c9a36a->enter($__internal_a259afe6f0330d27d3ad438447c5100f8b3d0db507777d4aad84f7f679c9a36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_275140c453268ff4550ed75ef6efab7730d90572369394d94b8fee4da94c70cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275140c453268ff4550ed75ef6efab7730d90572369394d94b8fee4da94c70cf->enter($__internal_275140c453268ff4550ed75ef6efab7730d90572369394d94b8fee4da94c70cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
      <div class=\"container\">
        <div class=\"blog-header\">
    <h1> A complete responsive Blog</h1>
            <p class=\"lead\">complete blog using the php course</p>
        </div>
        <div class=\"row\">
        <div class=\"col-sm-8\"><! --mainbolg-- >
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "           
            <div class=\"blogpost thumbnail\">
               
\t\t\t<img class=\"img-responsive img-rounded\" style=\"max-height:310px\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("upload/" . $this->getAttribute($context["post"], "postImg", array()))), "html", null, true);
            echo "\" >
\t\t\t
                <div class=\"caption\">
\t\t\t<h1 id=\"heading\"> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postTitle", array()), "html", null, true);
            echo "</h1>
\t\t<p class=\"description\">Category:";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postDetails", array()), "html", null, true);
            echo " &nbsp; Published on
\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postDate", array()), "html", null, true);
            echo "
\t\t</p>
        <p class=\"post\"> 
                  ";
            // line 26
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["post"], "postData", array())) > 50)) ? ((twig_slice($this->env, $this->getAttribute($context["post"], "postData", array()), 0, 50) . "...")) : ($this->getAttribute($context["post"], "postData", array()))), "html", null, true);
            echo "</p>
\t\t
\t\t</div>
                <a href=\"/symfonyBlog/web/app_dev.php/Blog/fullpost/";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" ><span class=\"btn btn-info\">Read More  &raquo;</span></a>
            </div> 
            <br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "<br><br>
            </div><! --main blogbar-->
            
                
                </div> 
                
            </div> 
    
    
    ";
        
        $__internal_275140c453268ff4550ed75ef6efab7730d90572369394d94b8fee4da94c70cf->leave($__internal_275140c453268ff4550ed75ef6efab7730d90572369394d94b8fee4da94c70cf_prof);

        
        $__internal_a259afe6f0330d27d3ad438447c5100f8b3d0db507777d4aad84f7f679c9a36a->leave($__internal_a259afe6f0330d27d3ad438447c5100f8b3d0db507777d4aad84f7f679c9a36a_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  115 => 29,  109 => 26,  103 => 23,  99 => 22,  95 => 21,  89 => 18,  84 => 15,  80 => 14,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
    blog Page
    {% endblock %}
{% block body  %}
    
      <div class=\"container\">
        <div class=\"blog-header\">
    <h1> A complete responsive Blog</h1>
            <p class=\"lead\">complete blog using the php course</p>
        </div>
        <div class=\"row\">
        <div class=\"col-sm-8\"><! --mainbolg-- >
            {% for post in posts %}
           
            <div class=\"blogpost thumbnail\">
               
\t\t\t<img class=\"img-responsive img-rounded\" style=\"max-height:310px\" src=\"{{asset('upload/' ~ post.postImg)}}\" >
\t\t\t
                <div class=\"caption\">
\t\t\t<h1 id=\"heading\"> {{post.postTitle}}</h1>
\t\t<p class=\"description\">Category:{{post.postDetails}} &nbsp; Published on
\t\t{{post.postDate}}
\t\t</p>
        <p class=\"post\"> 
                  {{  post.postData|length > 50 ? post.postData|slice(0, 50) ~ '...' : post.postData }}</p>
\t\t
\t\t</div>
                <a href=\"/symfonyBlog/web/app_dev.php/Blog/fullpost/{{post.id}}\" ><span class=\"btn btn-info\">Read More  &raquo;</span></a>
            </div> 
            <br>
            {% endfor %}
<br><br>
            </div><! --main blogbar-->
            
                
                </div> 
                
            </div> 
    
    
    {% endblock %}", "blog/home.html.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\app\\Resources\\views\\blog\\home.html.twig");
    }
}
