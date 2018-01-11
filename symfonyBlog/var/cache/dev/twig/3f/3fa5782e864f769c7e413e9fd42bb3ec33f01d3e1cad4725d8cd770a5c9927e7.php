<?php

/* blog/Post.html.twig */
class __TwigTemplate_8a17be093c983b54b0d0ec26ca4d4b712f1a5a8b08bfdcb63ed986ae21debcde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/Post.html.twig", 1);
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
        $__internal_29c6175381621c3cf3d091a2a1ce574e857ab7391f806202bb85a991410fafc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c6175381621c3cf3d091a2a1ce574e857ab7391f806202bb85a991410fafc2->enter($__internal_29c6175381621c3cf3d091a2a1ce574e857ab7391f806202bb85a991410fafc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/Post.html.twig"));

        $__internal_1fe2f92ff43211ba1ca60703f19883b680548096d4db32ed92aa20b76dfcdee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe2f92ff43211ba1ca60703f19883b680548096d4db32ed92aa20b76dfcdee9->enter($__internal_1fe2f92ff43211ba1ca60703f19883b680548096d4db32ed92aa20b76dfcdee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/Post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c6175381621c3cf3d091a2a1ce574e857ab7391f806202bb85a991410fafc2->leave($__internal_29c6175381621c3cf3d091a2a1ce574e857ab7391f806202bb85a991410fafc2_prof);

        
        $__internal_1fe2f92ff43211ba1ca60703f19883b680548096d4db32ed92aa20b76dfcdee9->leave($__internal_1fe2f92ff43211ba1ca60703f19883b680548096d4db32ed92aa20b76dfcdee9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa3de1f1679e0aec4280c948384916f01f96b39f8f0c46fcd75eee141635f2c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3de1f1679e0aec4280c948384916f01f96b39f8f0c46fcd75eee141635f2c7->enter($__internal_aa3de1f1679e0aec4280c948384916f01f96b39f8f0c46fcd75eee141635f2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05db7dbd2f9bf8d49085591f56eedd074e6e55aa97458dea414684cc06478aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05db7dbd2f9bf8d49085591f56eedd074e6e55aa97458dea414684cc06478aba->enter($__internal_05db7dbd2f9bf8d49085591f56eedd074e6e55aa97458dea414684cc06478aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postTitle", array()), "html", null, true);
        echo "
    ";
        
        $__internal_05db7dbd2f9bf8d49085591f56eedd074e6e55aa97458dea414684cc06478aba->leave($__internal_05db7dbd2f9bf8d49085591f56eedd074e6e55aa97458dea414684cc06478aba_prof);

        
        $__internal_aa3de1f1679e0aec4280c948384916f01f96b39f8f0c46fcd75eee141635f2c7->leave($__internal_aa3de1f1679e0aec4280c948384916f01f96b39f8f0c46fcd75eee141635f2c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f6d48ae38e0f68657dcdd5fd3667cb949e774e123a9545f4775619e8dfc5a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6d48ae38e0f68657dcdd5fd3667cb949e774e123a9545f4775619e8dfc5a01->enter($__internal_7f6d48ae38e0f68657dcdd5fd3667cb949e774e123a9545f4775619e8dfc5a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4da191f8abd0dd8c0afd7074aca49add40fd11a65e2ecaaa165bd0f0433b8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4da191f8abd0dd8c0afd7074aca49add40fd11a65e2ecaaa165bd0f0433b8f7->enter($__internal_c4da191f8abd0dd8c0afd7074aca49add40fd11a65e2ecaaa165bd0f0433b8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
      <div class=\"container\">
         
      
        <div class=\"row\">
        <div class=\"col-sm-8\"><! --mainbolg-- >

           
            <div class=\"blogpost thumbnail\">
                         
\t\t\t<img class=\"img-responsive img-rounded\"src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("upload/" . $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postImg", array()))), "html", null, true);
        echo "\" >
\t\t\t
                <div class=\"caption\">
\t\t\t<h1 id=\"heading\"> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postTitle", array()), "html", null, true);
        echo "</h1>
\t\t<p class=\"description\">Category:";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postDetails", array()), "html", null, true);
        echo " &nbsp; Published on
\t\t";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postDate", array()), "html", null, true);
        echo "
\t\t</p>
        <p class=\"post\"> 
                  ";
        // line 24
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postData", array()), "html", null, true));
        echo "</p>
\t\t
\t\t</div>
                
            </div> 
                  <br>
            <div id='commentdiv'>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            echo "<div class=\"CommentBlock\"><! --comment area-- >
                         
                         <p style=\"margin-left: 90px;\" class=\"Comment-info\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "commentedBy", array()), "html", null, true);
            echo "</p>  
                         <p style=\"margin-left: 90px;\" class=\"description\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "commentDate", array()), "html", null, true);
            echo "</p> 
                         <p style=\"margin-left: 90px;\" class=\"Comment\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</p> 
                     </div><! --comment area-- >
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                     </div><! --commentdiv-- >
        <br> <samp class=\"FieldInfo\"> Share Your Comments about this post</samp>
            <form action=\"/symfonyBlog/web/app_dev.php/Blog/fullpost/commentsubmit/";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" method=\"post\" >
            <fieldset>
                <div class=\"form-group\">
                <label for=\"name\"><span class=\"FieldInfo\">Name: </span></label>
                <input class=\"form-control\" type=\"text\" name=\"Name\" id=\"name\" placeholder=\"Name:\">
                    </div>
              
             
                <div class=\"form-group\">
                <label for=\"postarea\"><span class=\"FieldInfo\">Your Comment: </span></label>
             <textarea class=\"form-control\" name=\"Comment\" id=\"postarea\"></textarea>
                    </div>
                
                <input class=\"btn btn-primary \" type=\"submit\" name=\"Submit\" value=\"Comment\">
                <br>
                </fieldset>
            </form>
        </div>
              <br>  
           
                     

  <a style=\"float: left;\" href=\"/symfonyBlog/web/app_dev.php/Blog\" ><span style=\"padding-left: 50px;padding-right: 50px\" class=\"btn btn-info\">&DoubleLeftArrow; Back</span></a>
                           
            </div><! --main blogbar-->
            
       
                </div> 
                
            </div> 

    
    
    ";
        
        $__internal_c4da191f8abd0dd8c0afd7074aca49add40fd11a65e2ecaaa165bd0f0433b8f7->leave($__internal_c4da191f8abd0dd8c0afd7074aca49add40fd11a65e2ecaaa165bd0f0433b8f7_prof);

        
        $__internal_7f6d48ae38e0f68657dcdd5fd3667cb949e774e123a9545f4775619e8dfc5a01->leave($__internal_7f6d48ae38e0f68657dcdd5fd3667cb949e774e123a9545f4775619e8dfc5a01_prof);

    }

    public function getTemplateName()
    {
        return "blog/Post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 40,  138 => 38,  129 => 35,  125 => 34,  121 => 33,  114 => 31,  104 => 24,  98 => 21,  94 => 20,  90 => 19,  84 => 16,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
    {{post.postTitle}}
    {% endblock %}
{% block body  %}
    
      <div class=\"container\">
         
      
        <div class=\"row\">
        <div class=\"col-sm-8\"><! --mainbolg-- >

           
            <div class=\"blogpost thumbnail\">
                         
\t\t\t<img class=\"img-responsive img-rounded\"src=\"{{asset('upload/' ~ post.postImg)}}\" >
\t\t\t
                <div class=\"caption\">
\t\t\t<h1 id=\"heading\"> {{post.postTitle}}</h1>
\t\t<p class=\"description\">Category:{{post.postDetails}} &nbsp; Published on
\t\t{{post.postDate}}
\t\t</p>
        <p class=\"post\"> 
                  {{ post.postData|nl2br  }}</p>
\t\t
\t\t</div>
                
            </div> 
                  <br>
            <div id='commentdiv'>
                {%for comment in comments %}<div class=\"CommentBlock\"><! --comment area-- >
                         
                         <p style=\"margin-left: 90px;\" class=\"Comment-info\">{{comment.commentedBy}}</p>  
                         <p style=\"margin-left: 90px;\" class=\"description\">{{comment.commentDate}}</p> 
                         <p style=\"margin-left: 90px;\" class=\"Comment\">{{comment.comment}}</p> 
                     </div><! --comment area-- >
                     {% endfor %}
                     </div><! --commentdiv-- >
        <br> <samp class=\"FieldInfo\"> Share Your Comments about this post</samp>
            <form action=\"/symfonyBlog/web/app_dev.php/Blog/fullpost/commentsubmit/{{post.id}}\" method=\"post\" >
            <fieldset>
                <div class=\"form-group\">
                <label for=\"name\"><span class=\"FieldInfo\">Name: </span></label>
                <input class=\"form-control\" type=\"text\" name=\"Name\" id=\"name\" placeholder=\"Name:\">
                    </div>
              
             
                <div class=\"form-group\">
                <label for=\"postarea\"><span class=\"FieldInfo\">Your Comment: </span></label>
             <textarea class=\"form-control\" name=\"Comment\" id=\"postarea\"></textarea>
                    </div>
                
                <input class=\"btn btn-primary \" type=\"submit\" name=\"Submit\" value=\"Comment\">
                <br>
                </fieldset>
            </form>
        </div>
              <br>  
           
                     

  <a style=\"float: left;\" href=\"/symfonyBlog/web/app_dev.php/Blog\" ><span style=\"padding-left: 50px;padding-right: 50px\" class=\"btn btn-info\">&DoubleLeftArrow; Back</span></a>
                           
            </div><! --main blogbar-->
            
       
                </div> 
                
            </div> 

    
    
    {% endblock %}", "blog/Post.html.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\app\\Resources\\views\\blog\\Post.html.twig");
    }
}
