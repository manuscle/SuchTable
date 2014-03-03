<?php
/**
 * Created by EBelair.
 * User: manu
 * Date: 01/03/14
 * Time: 17:04
 */

namespace ZendTable;


interface ElementInterface
{
    /**
     * @param $name
     * @return ElementInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param $options
     * @return ElementInterface
     */
    public function setOptions($options);

    /**
     * @return array
     */
    public function getOptions();

    /**
     * @param $option
     * @return mixed
     */
    public function getOption($option);

    /**
     * @param array|\Traversable $arrayOrTraversable
     * @return ElementInterface
     */
    public function setAttributes($arrayOrTraversable);

    /**
     * @param string $key
     * @param string $value
     * @return ElementInterface
     */
    public function setAttribute($key, $value);

    /**
     * @param $key
     * @return string|null
     */
    public function getAttribute($key);

    /**
     * @param $key
     * @return ElementInterface
     */
    public function removeAttribute($key);

    /**
     * @param array $keys
     * @return ElementInterface
     */
    public function removeAttributes(array $keys);

    /**
     * @return ElementInterface
     */
    public function clearAttributes();

    /**
     * @param $key
     * @return bool
     */
    public function hasAttribute($key);

    /**
     * @return array
     */
    public function getAttributes();

    /**
     * @param mixed $value
     * @return ElementInterface
     */
    public function setValue($value);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $label
     * @return ElementInterface
     */
    public function setLabel($label);

    /**
     * @return mixed
     */
    public function getLabel();

    /**
     * @param array $labelAttributes
     * @return ElementInterface
     */
    public function setLabelAttributes(array $labelAttributes);

    /**
     * @return array
     */
    public function getLabelAttributes();

    /**
     * @param mixed $data
     * @return ElementInterface
     */
    public function setData($data);

    /**
     * @return mixed
     */
    public function getData();
}
