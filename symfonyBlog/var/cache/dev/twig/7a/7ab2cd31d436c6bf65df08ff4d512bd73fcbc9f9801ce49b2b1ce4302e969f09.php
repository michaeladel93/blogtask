<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d997adf53df13c0cca359ebb9abf1255f7121403897f74f01580f9c096b26f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d997adf53df13c0cca359ebb9abf1255f7121403897f74f01580f9c096b26f2->enter($__internal_4d997adf53df13c0cca359ebb9abf1255f7121403897f74f01580f9c096b26f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dfae51337f49dfb6ea57fa9a9b5e404d09845b3d3d58bd7b190dee9a6a348c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfae51337f49dfb6ea57fa9a9b5e404d09845b3d3d58bd7b190dee9a6a348c06->enter($__internal_dfae51337f49dfb6ea57fa9a9b5e404d09845b3d3d58bd7b190dee9a6a348c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d997adf53df13c0cca359ebb9abf1255f7121403897f74f01580f9c096b26f2->leave($__internal_4d997adf53df13c0cca359ebb9abf1255f7121403897f74f01580f9c096b26f2_prof);

        
        $__internal_dfae51337f49dfb6ea57fa9a9b5e404d09845b3d3d58bd7b190dee9a6a348c06->leave($__internal_dfae51337f49dfb6ea57fa9a9b5e404d09845b3d3d58bd7b190dee9a6a348c06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5b27e98bf843c8ece740b701330673e8e92bc5d7d4221c493629272e6f8b3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b27e98bf843c8ece740b701330673e8e92bc5d7d4221c493629272e6f8b3be->enter($__internal_c5b27e98bf843c8ece740b701330673e8e92bc5d7d4221c493629272e6f8b3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9973fcf9d92e1ddeda95a039c0bb54a24dd317334a0e2bf5f661b87ed743ab79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9973fcf9d92e1ddeda95a039c0bb54a24dd317334a0e2bf5f661b87ed743ab79->enter($__internal_9973fcf9d92e1ddeda95a039c0bb54a24dd317334a0e2bf5f661b87ed743ab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9973fcf9d92e1ddeda95a039c0bb54a24dd317334a0e2bf5f661b87ed743ab79->leave($__internal_9973fcf9d92e1ddeda95a039c0bb54a24dd317334a0e2bf5f661b87ed743ab79_prof);

        
        $__internal_c5b27e98bf843c8ece740b701330673e8e92bc5d7d4221c493629272e6f8b3be->leave($__internal_c5b27e98bf843c8ece740b701330673e8e92bc5d7d4221c493629272e6f8b3be_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_302981d0e47f52470ba3b610798130bc61b24d9425d5edfdbe64c80aedf700d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302981d0e47f52470ba3b610798130bc61b24d9425d5edfdbe64c80aedf700d0->enter($__internal_302981d0e47f52470ba3b610798130bc61b24d9425d5edfdbe64c80aedf700d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e6a4d16df090b31562e784c73683d6f5683c0fce0edc16130ea91a330a7ae637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a4d16df090b31562e784c73683d6f5683c0fce0edc16130ea91a330a7ae637->enter($__internal_e6a4d16df090b31562e784c73683d6f5683c0fce0edc16130ea91a330a7ae637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e6a4d16df090b31562e784c73683d6f5683c0fce0edc16130ea91a330a7ae637->leave($__internal_e6a4d16df090b31562e784c73683d6f5683c0fce0edc16130ea91a330a7ae637_prof);

        
        $__internal_302981d0e47f52470ba3b610798130bc61b24d9425d5edfdbe64c80aedf700d0->leave($__internal_302981d0e47f52470ba3b610798130bc61b24d9425d5edfdbe64c80aedf700d0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3297023ef3483b6a11068b6fed18568f3eb4340fb0bca1cd481525461f6fa454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3297023ef3483b6a11068b6fed18568f3eb4340fb0bca1cd481525461f6fa454->enter($__internal_3297023ef3483b6a11068b6fed18568f3eb4340fb0bca1cd481525461f6fa454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_93a9d2cef355a97938dc58fa032ad1d01cb552f589726784b501bc8a55792cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a9d2cef355a97938dc58fa032ad1d01cb552f589726784b501bc8a55792cb7->enter($__internal_93a9d2cef355a97938dc58fa032ad1d01cb552f589726784b501bc8a55792cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_93a9d2cef355a97938dc58fa032ad1d01cb552f589726784b501bc8a55792cb7->leave($__internal_93a9d2cef355a97938dc58fa032ad1d01cb552f589726784b501bc8a55792cb7_prof);

        
        $__internal_3297023ef3483b6a11068b6fed18568f3eb4340fb0bca1cd481525461f6fa454->leave($__internal_3297023ef3483b6a11068b6fed18568f3eb4340fb0bca1cd481525461f6fa454_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
