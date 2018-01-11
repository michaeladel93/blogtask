<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cd5054e02541fd43a3a4dc7993dd8f62503074d9dd3655eb7d862a98817e156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd5054e02541fd43a3a4dc7993dd8f62503074d9dd3655eb7d862a98817e156->enter($__internal_1cd5054e02541fd43a3a4dc7993dd8f62503074d9dd3655eb7d862a98817e156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_917402423f59dba9d510f557d17425b3897e5b9a23ce199bef7ce5ad3cef7574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917402423f59dba9d510f557d17425b3897e5b9a23ce199bef7ce5ad3cef7574->enter($__internal_917402423f59dba9d510f557d17425b3897e5b9a23ce199bef7ce5ad3cef7574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cd5054e02541fd43a3a4dc7993dd8f62503074d9dd3655eb7d862a98817e156->leave($__internal_1cd5054e02541fd43a3a4dc7993dd8f62503074d9dd3655eb7d862a98817e156_prof);

        
        $__internal_917402423f59dba9d510f557d17425b3897e5b9a23ce199bef7ce5ad3cef7574->leave($__internal_917402423f59dba9d510f557d17425b3897e5b9a23ce199bef7ce5ad3cef7574_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3b9392dfe5588ae4fbcaaa606061382d9e93285fd8d7c193966e9002867d087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b9392dfe5588ae4fbcaaa606061382d9e93285fd8d7c193966e9002867d087->enter($__internal_c3b9392dfe5588ae4fbcaaa606061382d9e93285fd8d7c193966e9002867d087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49ceea4939684f3dd3677f297f7789e083b4ebe8fc0372d23bdd706ba4e0c5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ceea4939684f3dd3677f297f7789e083b4ebe8fc0372d23bdd706ba4e0c5c5->enter($__internal_49ceea4939684f3dd3677f297f7789e083b4ebe8fc0372d23bdd706ba4e0c5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_49ceea4939684f3dd3677f297f7789e083b4ebe8fc0372d23bdd706ba4e0c5c5->leave($__internal_49ceea4939684f3dd3677f297f7789e083b4ebe8fc0372d23bdd706ba4e0c5c5_prof);

        
        $__internal_c3b9392dfe5588ae4fbcaaa606061382d9e93285fd8d7c193966e9002867d087->leave($__internal_c3b9392dfe5588ae4fbcaaa606061382d9e93285fd8d7c193966e9002867d087_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_316b03276593022b620d10658585ed1ae64041da052bdf259f29130ba4ccee40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316b03276593022b620d10658585ed1ae64041da052bdf259f29130ba4ccee40->enter($__internal_316b03276593022b620d10658585ed1ae64041da052bdf259f29130ba4ccee40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b89a16198e1f79c259f80a874cb7c8da72da765966b9f0779fb95d30c0771576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89a16198e1f79c259f80a874cb7c8da72da765966b9f0779fb95d30c0771576->enter($__internal_b89a16198e1f79c259f80a874cb7c8da72da765966b9f0779fb95d30c0771576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b89a16198e1f79c259f80a874cb7c8da72da765966b9f0779fb95d30c0771576->leave($__internal_b89a16198e1f79c259f80a874cb7c8da72da765966b9f0779fb95d30c0771576_prof);

        
        $__internal_316b03276593022b620d10658585ed1ae64041da052bdf259f29130ba4ccee40->leave($__internal_316b03276593022b620d10658585ed1ae64041da052bdf259f29130ba4ccee40_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0ef02290bd0f31c65406d103c232def2899221126bb302b8b2ef98805892156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ef02290bd0f31c65406d103c232def2899221126bb302b8b2ef98805892156->enter($__internal_d0ef02290bd0f31c65406d103c232def2899221126bb302b8b2ef98805892156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8631d73a1469e0e4372bd45b7a3cbc5ad14cfe75422966d9eebf3491c35ca515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8631d73a1469e0e4372bd45b7a3cbc5ad14cfe75422966d9eebf3491c35ca515->enter($__internal_8631d73a1469e0e4372bd45b7a3cbc5ad14cfe75422966d9eebf3491c35ca515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8631d73a1469e0e4372bd45b7a3cbc5ad14cfe75422966d9eebf3491c35ca515->leave($__internal_8631d73a1469e0e4372bd45b7a3cbc5ad14cfe75422966d9eebf3491c35ca515_prof);

        
        $__internal_d0ef02290bd0f31c65406d103c232def2899221126bb302b8b2ef98805892156->leave($__internal_d0ef02290bd0f31c65406d103c232def2899221126bb302b8b2ef98805892156_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
