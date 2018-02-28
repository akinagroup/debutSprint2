<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c6f1a590ce49a9aab00141ccef2597ba2a600e6307cf7e52920723c639b7cdf1 extends Twig_Template
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
        $__internal_1d7be91135ae9a0e29119801c64e4e6c1c0827ee3be61364594bbe2315f3f15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7be91135ae9a0e29119801c64e4e6c1c0827ee3be61364594bbe2315f3f15f->enter($__internal_1d7be91135ae9a0e29119801c64e4e6c1c0827ee3be61364594bbe2315f3f15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b338621f816cdd5c5dde82407f9c4743fda2ea72f2cf172f3899974a04317536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b338621f816cdd5c5dde82407f9c4743fda2ea72f2cf172f3899974a04317536->enter($__internal_b338621f816cdd5c5dde82407f9c4743fda2ea72f2cf172f3899974a04317536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1d7be91135ae9a0e29119801c64e4e6c1c0827ee3be61364594bbe2315f3f15f->leave($__internal_1d7be91135ae9a0e29119801c64e4e6c1c0827ee3be61364594bbe2315f3f15f_prof);

        
        $__internal_b338621f816cdd5c5dde82407f9c4743fda2ea72f2cf172f3899974a04317536->leave($__internal_b338621f816cdd5c5dde82407f9c4743fda2ea72f2cf172f3899974a04317536_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
