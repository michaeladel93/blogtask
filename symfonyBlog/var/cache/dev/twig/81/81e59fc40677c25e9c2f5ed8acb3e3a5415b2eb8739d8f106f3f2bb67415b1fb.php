<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_7249e9ea235e0960072b3f2ad4e2f25badbf0f45e8620637ea2808d365437e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acf858c5ad53366831431c093b0713be902d49fdcb77c1a790a87f958a6fc985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf858c5ad53366831431c093b0713be902d49fdcb77c1a790a87f958a6fc985->enter($__internal_acf858c5ad53366831431c093b0713be902d49fdcb77c1a790a87f958a6fc985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_ce1df941bd0d060bf2cbb5a3daa7a5f3a572251fd59dbdeae455ba852a3590f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1df941bd0d060bf2cbb5a3daa7a5f3a572251fd59dbdeae455ba852a3590f7->enter($__internal_ce1df941bd0d060bf2cbb5a3daa7a5f3a572251fd59dbdeae455ba852a3590f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_acf858c5ad53366831431c093b0713be902d49fdcb77c1a790a87f958a6fc985->leave($__internal_acf858c5ad53366831431c093b0713be902d49fdcb77c1a790a87f958a6fc985_prof);

        
        $__internal_ce1df941bd0d060bf2cbb5a3daa7a5f3a572251fd59dbdeae455ba852a3590f7->leave($__internal_ce1df941bd0d060bf2cbb5a3daa7a5f3a572251fd59dbdeae455ba852a3590f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
