<?php

/* blog/deletepost.html.twig */
class __TwigTemplate_bf1c08bd08ac3662f0b7c2936b17056ceb5b0a42190ecff35d806fa26c18ca5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/deletepost.html.twig", 1);
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
        $__internal_62065c7af659f4b3d63981691bed1fa7be3dbdba4a2442e14d8ba2a3a89ad059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62065c7af659f4b3d63981691bed1fa7be3dbdba4a2442e14d8ba2a3a89ad059->enter($__internal_62065c7af659f4b3d63981691bed1fa7be3dbdba4a2442e14d8ba2a3a89ad059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/deletepost.html.twig"));

        $__internal_c31d5df0b28449498116e4a0cb62e993a3913202774a9ca2972b999aa6e24d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31d5df0b28449498116e4a0cb62e993a3913202774a9ca2972b999aa6e24d48->enter($__internal_c31d5df0b28449498116e4a0cb62e993a3913202774a9ca2972b999aa6e24d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/deletepost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62065c7af659f4b3d63981691bed1fa7be3dbdba4a2442e14d8ba2a3a89ad059->leave($__internal_62065c7af659f4b3d63981691bed1fa7be3dbdba4a2442e14d8ba2a3a89ad059_prof);

        
        $__internal_c31d5df0b28449498116e4a0cb62e993a3913202774a9ca2972b999aa6e24d48->leave($__internal_c31d5df0b28449498116e4a0cb62e993a3913202774a9ca2972b999aa6e24d48_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ca206ae417338dc9cdd365254cff265fcdf83ad277173d4395e1ca6e480c4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca206ae417338dc9cdd365254cff265fcdf83ad277173d4395e1ca6e480c4b8->enter($__internal_0ca206ae417338dc9cdd365254cff265fcdf83ad277173d4395e1ca6e480c4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8402756c292bbd45bd321d104c582f911f87e0d0914b3a761b80f85080815d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8402756c292bbd45bd321d104c582f911f87e0d0914b3a761b80f85080815d8->enter($__internal_e8402756c292bbd45bd321d104c582f911f87e0d0914b3a761b80f85080815d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "   Delete Post
    ";
        
        $__internal_e8402756c292bbd45bd321d104c582f911f87e0d0914b3a761b80f85080815d8->leave($__internal_e8402756c292bbd45bd321d104c582f911f87e0d0914b3a761b80f85080815d8_prof);

        
        $__internal_0ca206ae417338dc9cdd365254cff265fcdf83ad277173d4395e1ca6e480c4b8->leave($__internal_0ca206ae417338dc9cdd365254cff265fcdf83ad277173d4395e1ca6e480c4b8_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d93e08ef1ee52dde6ef92d093d2ecf5c6e2692bb8b69110e7441584d0ad1df67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93e08ef1ee52dde6ef92d093d2ecf5c6e2692bb8b69110e7441584d0ad1df67->enter($__internal_d93e08ef1ee52dde6ef92d093d2ecf5c6e2692bb8b69110e7441584d0ad1df67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_216f8d0ab9443af40415b9679e42727457c07fd2d234fdc601b928332db18335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216f8d0ab9443af40415b9679e42727457c07fd2d234fdc601b928332db18335->enter($__internal_216f8d0ab9443af40415b9679e42727457c07fd2d234fdc601b928332db18335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "
";
        
        $__internal_216f8d0ab9443af40415b9679e42727457c07fd2d234fdc601b928332db18335->leave($__internal_216f8d0ab9443af40415b9679e42727457c07fd2d234fdc601b928332db18335_prof);

        
        $__internal_d93e08ef1ee52dde6ef92d093d2ecf5c6e2692bb8b69110e7441584d0ad1df67->leave($__internal_d93e08ef1ee52dde6ef92d093d2ecf5c6e2692bb8b69110e7441584d0ad1df67_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_94444f059ea8a7f3840f0693410ef7b613d9cd6ccac4d2bb2e1c4935b80c0b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94444f059ea8a7f3840f0693410ef7b613d9cd6ccac4d2bb2e1c4935b80c0b4b->enter($__internal_94444f059ea8a7f3840f0693410ef7b613d9cd6ccac4d2bb2e1c4935b80c0b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8ef2d1a0e67cfb52b91ff5a5594d70058141372140a1df8ae7e677dc7f6db32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ef2d1a0e67cfb52b91ff5a5594d70058141372140a1df8ae7e677dc7f6db32->enter($__internal_a8ef2d1a0e67cfb52b91ff5a5594d70058141372140a1df8ae7e677dc7f6db32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Choose Post to be deleted</h1>
    <a style=\"float: left\" href=\"/symfonyBlog/web/app_dev.php/admin\" ><span class=\"btn btn-info\"> &DoubleLeftArrow; Back </span></a>
      <div class=\"table-responsive\">  
    <table class=\"table table-striped table-hover\">
        <tr>
            <th style=\"wdith:15%\">title</th>
            <th style=\"wdith:15%\">Image</th>
            <th style=\"wdith:5%\">date</th>
            <th style=\"wdith:5%\">Category</th>
            <th style=\"wdith:5%\">Posted_by</th>
            <th style=\"wdith:5%\">number_comments</th>
            <th style=\"wdith:40%\">Post</th>
            <th style=\"width:5%\">Delete</th>
        </tr>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 24
            echo "            <tr >
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postTitle", array()), "html", null, true);
            echo "</td>
                <td><img class=\"img-responsive img-rounded\" style=\"max-height:110px\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("upload/" . $this->getAttribute($context["post"], "postImg", array()))), "html", null, true);
            echo "\" ></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postDate", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postDetails", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postedBy", array()), "html", null, true);
            echo "</td>
                <td></td>
                <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postData", array()), "html", null, true);
            echo "</td>
                <td> <a href=\"/symfonyBlog/web/app_dev.php/admin/delete/deletepost/";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" ><span class=\"btn btn-danger\">&Chi;</span></a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </table>
      </div>     
       
       
    ";
        
        $__internal_a8ef2d1a0e67cfb52b91ff5a5594d70058141372140a1df8ae7e677dc7f6db32->leave($__internal_a8ef2d1a0e67cfb52b91ff5a5594d70058141372140a1df8ae7e677dc7f6db32_prof);

        
        $__internal_94444f059ea8a7f3840f0693410ef7b613d9cd6ccac4d2bb2e1c4935b80c0b4b->leave($__internal_94444f059ea8a7f3840f0693410ef7b613d9cd6ccac4d2bb2e1c4935b80c0b4b_prof);

    }

    public function getTemplateName()
    {
        return "blog/deletepost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 35,  139 => 32,  135 => 31,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  111 => 24,  107 => 23,  91 => 9,  82 => 8,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
   Delete Post
    {% endblock %}
{% block javascripts %}

{% endblock %}
{% block body  %}
    <h1>Choose Post to be deleted</h1>
    <a style=\"float: left\" href=\"/symfonyBlog/web/app_dev.php/admin\" ><span class=\"btn btn-info\"> &DoubleLeftArrow; Back </span></a>
      <div class=\"table-responsive\">  
    <table class=\"table table-striped table-hover\">
        <tr>
            <th style=\"wdith:15%\">title</th>
            <th style=\"wdith:15%\">Image</th>
            <th style=\"wdith:5%\">date</th>
            <th style=\"wdith:5%\">Category</th>
            <th style=\"wdith:5%\">Posted_by</th>
            <th style=\"wdith:5%\">number_comments</th>
            <th style=\"wdith:40%\">Post</th>
            <th style=\"width:5%\">Delete</th>
        </tr>
        {% for post in posts %}
            <tr >
                <td>{{post.postTitle}}</td>
                <td><img class=\"img-responsive img-rounded\" style=\"max-height:110px\" src=\"{{asset('upload/' ~ post.postImg)}}\" ></td>
                <td>{{post.postDate}}</td>
                <td>{{post.postDetails}}</td>
                <td> {{  post.postedBy }}</td>
                <td></td>
                <td> {{  post.postData }}</td>
                <td> <a href=\"/symfonyBlog/web/app_dev.php/admin/delete/deletepost/{{post.id}}\" ><span class=\"btn btn-danger\">&Chi;</span></a></td>
            </tr>
        {% endfor %}
    </table>
      </div>     
       
       
    {% endblock %}", "blog/deletepost.html.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\app\\Resources\\views\\blog\\deletepost.html.twig");
    }
}
