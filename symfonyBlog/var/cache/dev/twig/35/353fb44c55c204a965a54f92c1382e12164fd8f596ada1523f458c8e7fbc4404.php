<?php

/* blog/AdminPanel.html.twig */
class __TwigTemplate_f06448bf3077aba56e3f69ade342ced60ce2ecbd2baffeba35d8539e2a4132f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/AdminPanel.html.twig", 1);
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
        $__internal_202fb34c78e34e1fb1848d6db754ebfd2d7f5192e57af305d76a10a3b81d28dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202fb34c78e34e1fb1848d6db754ebfd2d7f5192e57af305d76a10a3b81d28dd->enter($__internal_202fb34c78e34e1fb1848d6db754ebfd2d7f5192e57af305d76a10a3b81d28dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/AdminPanel.html.twig"));

        $__internal_1ac5ad0f4e6b496c1ac5005523df6a61cb8b6f220fba5e8eccb5ec3d9fef433c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac5ad0f4e6b496c1ac5005523df6a61cb8b6f220fba5e8eccb5ec3d9fef433c->enter($__internal_1ac5ad0f4e6b496c1ac5005523df6a61cb8b6f220fba5e8eccb5ec3d9fef433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/AdminPanel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_202fb34c78e34e1fb1848d6db754ebfd2d7f5192e57af305d76a10a3b81d28dd->leave($__internal_202fb34c78e34e1fb1848d6db754ebfd2d7f5192e57af305d76a10a3b81d28dd_prof);

        
        $__internal_1ac5ad0f4e6b496c1ac5005523df6a61cb8b6f220fba5e8eccb5ec3d9fef433c->leave($__internal_1ac5ad0f4e6b496c1ac5005523df6a61cb8b6f220fba5e8eccb5ec3d9fef433c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cff9b743c028a43027579f553bed6019e5f98be9ec3eae02b54f211dffba8448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff9b743c028a43027579f553bed6019e5f98be9ec3eae02b54f211dffba8448->enter($__internal_cff9b743c028a43027579f553bed6019e5f98be9ec3eae02b54f211dffba8448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_073999ab5125c0ef60fc9a36c8edd3751a24db9bfbcfddfa7ddf6d7332e7a6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073999ab5125c0ef60fc9a36c8edd3751a24db9bfbcfddfa7ddf6d7332e7a6b4->enter($__internal_073999ab5125c0ef60fc9a36c8edd3751a24db9bfbcfddfa7ddf6d7332e7a6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Admin Panel
    ";
        
        $__internal_073999ab5125c0ef60fc9a36c8edd3751a24db9bfbcfddfa7ddf6d7332e7a6b4->leave($__internal_073999ab5125c0ef60fc9a36c8edd3751a24db9bfbcfddfa7ddf6d7332e7a6b4_prof);

        
        $__internal_cff9b743c028a43027579f553bed6019e5f98be9ec3eae02b54f211dffba8448->leave($__internal_cff9b743c028a43027579f553bed6019e5f98be9ec3eae02b54f211dffba8448_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_96df16fcd26f4bd18eb04738cafda6607677d1718c23b57e109240e081b1af10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96df16fcd26f4bd18eb04738cafda6607677d1718c23b57e109240e081b1af10->enter($__internal_96df16fcd26f4bd18eb04738cafda6607677d1718c23b57e109240e081b1af10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdd225acc0a1551a02cbcba1ba2bddda62ea92a9bdf35cbc1f09a95b45ba00b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd225acc0a1551a02cbcba1ba2bddda62ea92a9bdf35cbc1f09a95b45ba00b7->enter($__internal_fdd225acc0a1551a02cbcba1ba2bddda62ea92a9bdf35cbc1f09a95b45ba00b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
          
          <div class=\"container\">
              <div class=\"row\">
            <div col=\"col-lg-6\">
                <a href=\"/symfonyBlog/web/app_dev.php/addPost\" ><span class=\"btn btn-success\">Add Post &raquo;</span></a>
            </div>     
       
              
              </div>
               <div class=\"table-responsive\">  
    <table class=\"table table-striped table-hover\">
        <tr>
            <th style=\"wdith:15%\">title</th>
            <th style=\"wdith:15%\">Image</th>
            <th style=\"wdith:5%\">date</th>
            <th style=\"wdith:5%\">Category</th>
            <th style=\"wdith:5%\">Posted_by</th>
            
            <th style=\"wdith:40%\">Post</th>
            <th style=\"width:5%\">Delete</th>
        </tr>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 29
            echo "            <tr >
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postTitle", array()), "html", null, true);
            echo "</td>
                <td><img class=\"img-responsive img-rounded\" style=\"max-height:110px\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("upload/" . $this->getAttribute($context["post"], "postImg", array()))), "html", null, true);
            echo "\" ></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postDate", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postDetails", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postedBy", array()), "html", null, true);
            echo "</td>
               
                <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "postData", array()), "html", null, true);
            echo "</td>
                <td> <a href=\"/symfonyBlog/web/app_dev.php/admin/delete/deletepost/";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" ><span class=\"btn btn-danger\">&Chi;</span></a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </table>
      </div>     
          </div>
    ";
        
        $__internal_fdd225acc0a1551a02cbcba1ba2bddda62ea92a9bdf35cbc1f09a95b45ba00b7->leave($__internal_fdd225acc0a1551a02cbcba1ba2bddda62ea92a9bdf35cbc1f09a95b45ba00b7_prof);

        
        $__internal_96df16fcd26f4bd18eb04738cafda6607677d1718c23b57e109240e081b1af10->leave($__internal_96df16fcd26f4bd18eb04738cafda6607677d1718c23b57e109240e081b1af10_prof);

    }

    public function getTemplateName()
    {
        return "blog/AdminPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 40,  126 => 37,  122 => 36,  117 => 34,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  98 => 29,  94 => 28,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
{% block body  %}

          
          <div class=\"container\">
              <div class=\"row\">
            <div col=\"col-lg-6\">
                <a href=\"/symfonyBlog/web/app_dev.php/addPost\" ><span class=\"btn btn-success\">Add Post &raquo;</span></a>
            </div>     
       
              
              </div>
               <div class=\"table-responsive\">  
    <table class=\"table table-striped table-hover\">
        <tr>
            <th style=\"wdith:15%\">title</th>
            <th style=\"wdith:15%\">Image</th>
            <th style=\"wdith:5%\">date</th>
            <th style=\"wdith:5%\">Category</th>
            <th style=\"wdith:5%\">Posted_by</th>
            
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
               
                <td> {{  post.postData }}</td>
                <td> <a href=\"/symfonyBlog/web/app_dev.php/admin/delete/deletepost/{{post.id}}\" ><span class=\"btn btn-danger\">&Chi;</span></a></td>
            </tr>
        {% endfor %}
    </table>
      </div>     
          </div>
    {% endblock %}", "blog/AdminPanel.html.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\app\\Resources\\views\\blog\\AdminPanel.html.twig");
    }
}
